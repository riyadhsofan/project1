<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function showEmp()
    {
        return view('welcome')->with('name','sofan');
    }

    public function getEmp()
    {
        // $date = [];
        // $data['id'] = 5;
        // $data['name'] = 'sofan';
        // return view('welcome', $data);

        return 'static Emp';
    }
}
