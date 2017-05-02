<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dev2 extends Model
{
    public function ok()
    {
    	return "ok";
    }

    public function error()
    {
    	return "error";
    }


    public function exception()
    {
    	return "error";
    }

    public function slow_method()
    {
    	return "error";
    }


    public function slow_db()
    {
    	return "error";
    }
}
