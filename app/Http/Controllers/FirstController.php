<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function showString()
    {
        return 'static string';
    }

    public function getIndex()
    {
        // $date = [];
        // $data['id'] = 5;
        // $data['name'] = 'sofan';
        // return view('welcome', $data);
    }
}
