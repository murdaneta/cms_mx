<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategorieRequest;
use App\Category;

class CategoryController extends Controller
{
   //
    public function index(){
    	$categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(CategorieRequest $request){
    	$request['user_id']=\Auth::user()->id;
    	$category=Category::create($request->all());
        \Session::flash('flash_message', 'La Categoria '.'"'.$category->name.'"'.' ha sido guardada exitosamente');
        return redirect()->route('system.categories.index');
    }
    public function edit($id){
    	$category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(CategorieRequest $request , $id){
    	$category=Category::find($id);
    	$category=$category->update($request->all());
        \Session::flash('flash_message', 'La Categoria ha sido editada exitosamente');
        return redirect()->route('system.categories.index');

    }
}
