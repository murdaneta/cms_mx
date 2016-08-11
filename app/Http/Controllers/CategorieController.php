<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategorieRequest;
use App\Categorie;

class CategorieController extends Controller
{
   //
    public function index(){
    	$categories = Categorie::all();
        return view('admin.categorie.index', compact('categories'));
    }
    public function create(){
        return view('admin.categorie.create');
    }
    public function store(CategorieRequest $request){
    	$request['user_id']=\Auth::user()->id;
    	$categorie=Categorie::create($request->all());
        \Session::flash('flash_message', 'La Categoria '.'"'.$categorie->name.'"'.' ha sido guardada exitosamente');
        return redirect()->route('system.categories.index');
    }
    public function edit($id){
    	$categorie = Categorie::find($id);
        return view('admin.categorie.edit', compact('categorie'));
    }
    public function update(CategorieRequest $request , $id){
    	$categorie=Categorie::find($id);
    	$categorie=$categorie->update($request->all());
        \Session::flash('flash_message', 'La Categoria ha sido editada exitosamente');
        return redirect()->route('system.categories.index');

    }
}
