<?php
/**
 * Created by PhpStorm.
 * User: fuwap
 * Date: 4/1/2020
 * Time: 10:25
 */

namespace App\Helper;

use Illuminate\Http\Request;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class HelperBiashara
{
    public static function getGoogleVisionLabels(Request $request)
    {
        $json = [];

        if ($request->file('image')) {
# instantiates a client
            $imageAnnotator = self::getGoogleVisionCredits();

# the name of the image file to annotate
            $fileName = $request->file('image');

# prepare the image to be annotated
            $image = file_get_contents($fileName);

            # performs label detection on the image file
            $response = $imageAnnotator->labelDetection($image);
            $labels = $response->getLabelAnnotations();

            foreach ($labels as $label) {
                $json[] = [
                    'labels' => $label->getDescription()
                ];
            }
            $imageAnnotator->close();
        }

        return $json;
    }

    public static function getGoogleVisionWeb(Request $request)
    {
        $json = [];
        if ($request->file('image')) {
# instantiates a client
            $imageAnnotator = self::getGoogleVisionCredits();

# the name of the image file to annotate
            $fileName = $request->file('image');

# prepare the image to be annotated
            $image = file_get_contents($fileName);

            # performs label detection on the image file
            $response = $imageAnnotator->webDetection($image);
            $web = $response->getWebDetection();

            count($web->getBestGuessLabels());
            foreach ($web->getBestGuessLabels() as $label) {
                $json[] = [
                    'webLabels' => $label->getLabel()
                ];
            }

            count($web->getWebEntities());
            foreach ($web->getWebEntities() as $entity) {
                $json[] = [
                    'webDescription' => $entity->getDescription(),
                    'webScore' => $entity->getScore()
                ];
            }
            $imageAnnotator->close();
        }

        return $json;
    }

    public static function getGoogleVisionSafe(Request $request)
    {
        $json = [];
        if ($request->file('image')) {
# instantiates a client
            $imageAnnotator = self::getGoogleVisionCredits();

# the name of the image file to annotate
            $fileName = $request->file('image');

# prepare the image to be annotated
            $image = file_get_contents($fileName);

            # performs label detection on the image file
            $response = $imageAnnotator->safeSearchDetection($image);
            $safe = $response->getSafeSearchAnnotation();

            $adult = $safe->getAdult();
            $medical = $safe->getMedical();
            $spoof = $safe->getSpoof();
            $violence = $safe->getViolence();
            $racy = $safe->getRacy();

            # names of likelihood from google.cloud.vision.enums
            $likelihoodName = ['UNKNOWN', 'VERY_UNLIKELY', 'UNLIKELY',
                'POSSIBLE', 'LIKELY', 'VERY_LIKELY'];

            $json[] = [
                'Adult' => $likelihoodName[$adult],
                'Medical' => $likelihoodName[$medical],
                'Spoof' => $likelihoodName[$spoof],
                'Violence' => $likelihoodName[$violence],
                'Racy' => $likelihoodName[$racy],
            ];
            $imageAnnotator->close();
        }

        return $json;
    }

    private static function getGoogleVisionCredits()
    {
        return $imageAnnotator = new ImageAnnotatorClient([
            'projectId' => 'biashara-271309',
            'credentials' => '../resources/biashara-272909-e700872b0231.json'
        ]);
    }
}