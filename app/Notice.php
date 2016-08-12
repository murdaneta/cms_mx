<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
   protected $table = 'news';

    /**
     * Campos habilitados para mass assignment
     *
     * @var array
     */
    protected $fillable = ['name',
							'slug',
							'status',
							'title',
							'secction',
							'content',
							'description',
							'category_id',
							'user_id'];
	public function img()
    {
        return $this->belongsToMany('App\Image','image_news')->withPivot('image_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function oneImg($images){
        foreach ($images as $img) {
            return url('assets/images')."/".$img->name;
        }
    }
}
