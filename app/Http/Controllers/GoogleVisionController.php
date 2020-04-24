<?php

namespace App\Http\Controllers;

use Google\Rpc\Help;
use Illuminate\Http\Request;

use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use App\Helper\HelperBiashara;

class GoogleVisionController extends Controller
{
    //show the upload form
    public function displayForm(){
        return view('GoogleVision.vision');
    }

    public function showImageResults(Request $request){

        $json = ['success' => 'false'];

        if ($request->file('image')) {
            $json['success'] = 'true';

            $json = array_merge($json, HelperBiashara::getGoogleVisionLabels($request));
            $json = array_merge($json, HelperBiashara::getGoogleVisionWeb($request));
            $json = array_merge($json, HelperBiashara::getGoogleVisionSafe($request));
        }

        return json_encode($json);
    }
}
