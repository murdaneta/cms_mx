<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NoticeRequest extends Request
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
                'secction'=>'required',
                'category_id'=>'required',
                'file'=>'required|mimes:jpeg'
                ];
            }
            case 'PUT':{
                return [
                'secction'=>'required',
                'category_id'=>'required',
                'file'=>'mimes:jpeg'
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
