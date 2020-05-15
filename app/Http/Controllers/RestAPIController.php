<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RestApiTest;
use Validator;

class RestAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = RestApiTest::all();
        return response()->json($tests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required'
    ]);

        if($validator->fails()){
            $response = array('response' => $validator->messages(),  'success' => false);
            return $response;
        } else {
            $test = new RestApiTest;
            $test->text = $request->input('text');
            $test->body = $request->input('body');
            $test->save();

            return response()->json($test);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = RestApiTest::find($id);
        return response()->json($test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required'
        ]);

        if($validator->fails()){
            $response = array('response' => $validator->messages(),  'success' => false);
            return $response;
        } else {
            $test = RestApiTest::find($id);
            $test->text = $request->input('text');
            $test->body = $request->input('body');
            $test->save();

            return response()->json($test);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = RestApiTest::find($id);
        $test->delete();

        $response = array('response' => 'test deleted',  'success' => true);
        return $response;
    }
}
