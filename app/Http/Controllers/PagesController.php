<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController
{
    public function __invoke()
    {
    	return view('welcome');
    }
}
