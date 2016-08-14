<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\NoticeRequest;
use App\Notice;
use App\Category;
use App\Social;
use App\Image;

class NoticeController extends Controller
{
    //
    public function index(){
        $news = Notice::all();
    	$socials = Social::all();
        return view('admin.notice.list', compact('news', 'socials'));
    }
    public function create(){
        return view('admin.notice.create');
    }
    public function store(NoticeRequest $request){
        //obtenemos el campo file definido en el formulario
        $namefile=$this->uploadImg($request->file('file'),$request->category_id);
        $request['user_id']=\Auth::user()->id;
        $img= new Image;
        $img->name=$namefile;
        $img->directory=public_path('assets/images');
        $img->user_id=$request['user_id'];
        $img->save();
        $news = Notice::create($request->all());
        $news->img()->attach($img->id);
        \Session::flash('flash_message', 'La Noticia '.'"'.$news->name.'"'.' ha sido guardada exitosamente');
        return redirect()->route('system.news.index');
    }
    public function edit($id){
    	$notice = Notice::find($id);
        return view('admin.notice.edit', compact('notice'));
    }
    public function update(NoticeRequest $request, $id){
        $news = Notice::find($id);
        $news->update($request->all());
        \Session::flash('flash_message', 'La Noticia '.'"'.$news->name.'"'.' ha sido actualizada exitosamente');
        return redirect()->route('system.news.index');

    }
    public function uploadImg($file,$category)
    {
           //$file = $request->file('file'); 
            $category_=Category::find($category);
           //Creamos el nombre del archivo
           $nombre = $category_->id."_".time().'.'.$file->guessExtension();
     
           //indicamos que queremos guardar un nuevo archivo en el directorio publico
           \Storage::disk('news')->put($nombre,\File::get($file));
     
           return $nombre;
    }
}
