<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionController extends Controller
{
    //show the upload form
    public function displayForm(){
        return view('GoogleVision.vision');
    }

    public function showImageResults(Request $request){

        //putenv("GOOGLE_APPLICATION_CREDENTIALS='../resources/ServiceAccountKey.json'");

        if($request->file('image')){
# instantiates a client
            $imageAnnotator = new ImageAnnotatorClient([
                'projectId' => 'biashara-271309',
                'credentials' => '../resources/biashara-271309-44f3fc73f63b.json'
            ]);

# the name of the image file to annotate
            $fileName = $request->file('image');

# prepare the image to be annotated
            $image = file_get_contents($fileName);

# performs label detection on the image file
            $response = $imageAnnotator->labelDetection($image);
            $labels = $response->getLabelAnnotations();

            if ($labels) {
                echo("Labels:" . PHP_EOL);
                echo("</br>");
                foreach ($labels as $label) {
                    echo($label->getDescription() . PHP_EOL);
                    echo("</br>");
                }
            } else {
                echo('No label found' . PHP_EOL);
            }

            $response = $imageAnnotator->webDetection($image);
            $web = $response->getWebDetection();

            // Print best guess labels
            printf('%d best guess labels found' . PHP_EOL,
                count($web->getBestGuessLabels()));
            echo("</br>");
            foreach ($web->getBestGuessLabels() as $label) {
                printf('Best guess label: %s' . PHP_EOL, $label->getLabel());
                echo("</br>");
            }

            printf('%d web entities found' . PHP_EOL,
                count($web->getWebEntities()));
            echo("</br>");
            foreach ($web->getWebEntities() as $entity) {
                printf('Description: %s, Score %s' . PHP_EOL,
                    $entity->getDescription(),
                    $entity->getScore());
                echo("</br>");
            }

            $imageAnnotator->close();
        }
    }
}
