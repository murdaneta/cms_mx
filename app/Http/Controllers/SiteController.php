<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Social;

class SiteController extends Controller
{
    public function index() {
    	$list		= Category::all();
    	return view('site.home.layout', compact('list'));

    }
}
