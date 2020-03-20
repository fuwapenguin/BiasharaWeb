<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function chat()
    {
        $title = 'Chat';
        return view('chatsystem.chat')->with('title', $title);
    }
}
