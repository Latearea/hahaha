<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perusahaanController extends Controller
{
    function index()
    {
    	return view('perusahaan');
    }
}
