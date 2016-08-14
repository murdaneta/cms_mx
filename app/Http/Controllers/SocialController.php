<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SaveSocial;
use App\Http\Requests\UpdateSocial;
use App\Social;

class SocialController extends Controller
{
    public function index() {
    	$socials = Social::all();
        return view('admin.social.index', compact('socials'));
    }


    public function create(){
        return view('admin.social.create');
    } 

    public function store(SaveSocial $request){
        //obtenemos y guardar el campo file definido en el formulario
        $social = Social::create($request->all());
        \Session::flash('flash_message', 'La Red Social '.'"'.$social->name.'"'.' ha sido guardada exitosamente');
        return redirect()->route('system.social.index');
    }
	public function edit($id){
    	$social = social::find($id);
        return view('admin.social.edit', compact('social'));
    }

    public function update(UpdateSocial $request, $id){
        $social = Social::find($id);
        $social->update($request->all());
        \Session::flash('flash_message', 'La Red Social '.'"'.$social->name.'"'.' ha sido actualizada exitosamente');
        return redirect()->route('system.social.index');

    }
}
