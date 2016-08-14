<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'social_networks';

    /**
     * Campos habilitados para mass assignment
     *
     * @var array
     */
    protected $fillable = [
    						'name',
							'link'
						];
}
