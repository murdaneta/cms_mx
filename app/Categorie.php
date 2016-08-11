<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $table = 'categories';

    /**
     * Campos habilitados para mass assignment
     *
     * @var array
     */
    protected $fillable = ['name',
							'description',
							'index',
							'user_id'];
	public function notice()
    {
        return $this->belongsTo('App\Notice');
    }
}
