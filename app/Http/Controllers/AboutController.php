<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index () {

        return view('about', [
            'title' => 'About',
            'active' => 'about',
            'name' => 'Sigit',
            'email' => 'sigi@sigit.com',
            'image' => 'image.jpg'
        ]);
    }
}
