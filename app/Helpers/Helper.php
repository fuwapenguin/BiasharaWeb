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
    public static function getGoogleVisionLabels($image)
    {
        $json = [];

        # instantiates a client
        $imageAnnotator = self::getGoogleVisionCredits();

        # performs label detection on the image file
        $response = $imageAnnotator->labelDetection($image);
        $labels = $response->getLabelAnnotations();

        $temp = array();
        foreach ($labels as $label) {
            $test = array($label->getDescription());
            $temp = array_merge($temp, $test);
        }
        $json['labels'] = $temp;
        $imageAnnotator->close();

        return $json;
    }

    public static function getGoogleVisionWeb($image)
    {
        $json = [];
        # instantiates a client
        $imageAnnotator = self::getGoogleVisionCredits();

        # performs label detection on the image file
        $response = $imageAnnotator->webDetection($image);
        $web = $response->getWebDetection();

        count($web->getBestGuessLabels());
        foreach ($web->getBestGuessLabels() as $label) {
            $json['webLabel'] = $label->getLabel();
        }

        $temp = array();
        count($web->getWebEntities());
        foreach ($web->getWebEntities() as $entity) {
            if($entity->getScore() > 0.5)
            {
                $test = array($entity->getDescription());
                $temp = array_merge($temp, $test);
            }
        }
        $json['webEntities'] = $temp;
        $imageAnnotator->close();

        return $json;
    }

    public static function getGoogleVisionSafe($image)
    {
        $json = [];
        # instantiates a client
        $imageAnnotator = self::getGoogleVisionCredits();

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

        $json['safe'] = [
            'Adult' => $likelihoodName[$adult],
            'Medical' => $likelihoodName[$medical],
            'Spoof' => $likelihoodName[$spoof],
            'Violence' => $likelihoodName[$violence],
            'Racy' => $likelihoodName[$racy],
        ];
        $imageAnnotator->close();

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