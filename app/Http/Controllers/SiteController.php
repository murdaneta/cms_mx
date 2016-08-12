<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Social;

class SiteController extends Controller
{
    public function index() {
    	$socials = Social::all();
    	//dd($socials);
    	return view('site.home.layout', compact('socials'));

    }
}
