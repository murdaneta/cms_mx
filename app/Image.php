<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    /**
     * Campos habilitados para mass assignment
     *
     * @var array
     */
    protected $fillable = ['name',
							'directory',
							'user_id'];
}
