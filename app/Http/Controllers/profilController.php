<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\barubaca;

class profilController extends Controller
{
    function index()
    {
    	return view('profil');
    }

    function update()
    {
    	$data  = Model_barubaca::get();
    	   return View::make('updateprofil')->with('dataList', $data);
    	
    }
}
