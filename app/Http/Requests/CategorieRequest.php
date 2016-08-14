<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Category;

class CategorieRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        /*dd($this->request->all()['name']);
        dd($this->route()->parameters('categories')['categories']);
        dd($this->method());
        dd($this);*/
        
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name'=>'required|min:3|unique:categories',
                    'description'=>'required',
                    'index'=>'unique:categories'
                ];
            }
            case 'PUT':{
                $id=$this->route()->parameters('categories')['categories'];
                $form=$this->request->all();
                $category=Category::find($id);
                $rule1='';
                $rule2='';
                if ($category->name != $form['name']) {
                    $rule1='|unique:categories';
                }
                if($category->index != $form['index']){
                    $rule2='unique:categories';   
                }
                return [
                    'name'=>'required|min:3'.$rule1,
                    'description'=>'required',
                    'index'=>$rule2
                ];
            }
            case 'PATCH':
            {
                return [];
            }
            default:break;
        }

    }
}
