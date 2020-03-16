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
        if($request->file('image')){
# instantiates a client
            $imageAnnotator = new ImageAnnotatorClient();

# the name of the image file to annotate
            $fileName = $request->file('image');

# prepare the image to be annotated
            $image = file_get_contents($fileName);

# performs label detection on the image file
            $response = $imageAnnotator->labelDetection($image);
            $labels = $response->getLabelAnnotations();

            if ($labels) {
                echo("Labels:" . PHP_EOL);
                foreach ($labels as $label) {
                    echo($label->getDescription() . PHP_EOL);
                }
            } else {
                echo('No label found' . PHP_EOL);
            }
        }
    }
}
