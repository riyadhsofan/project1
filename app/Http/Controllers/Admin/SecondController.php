<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('showString1', 'showString2');
    }

    public function showString()
    {
        return 'static string';
    }

    public function showString1()
    {
        return 'static string';
    }

    public function showString2()
    {
        return 'static string';
    }

    public function showString3()
    {
        return 'static string';
    }
}
