<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dev1;
use App\Dev2;

class HomeController extends Controller
{
    




    public function ok(Request $req)
    {
    	return "ok";
    }


    public function dev1(Request $req)
    {
    	$dev1 = new Dev1;

    	return $dev1->ok();
    }


    public function dev2(Request $req)
    {
    	$dev2 = new Dev2;

    	return $dev2->ok();
    }



}
