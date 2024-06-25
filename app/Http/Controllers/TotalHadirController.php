<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TotalHadirController extends Controller
{
    public function index()
    {
       
        return view('totalhadir/read');
    }
}
