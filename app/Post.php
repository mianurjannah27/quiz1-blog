<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	
   protected $table = "tb_post";
   protected $primaryKey = 'post_id';
   protected $fillable = ['post_date', 'post_slug','post_title','post_text','post_cat_id'];
   public function get_category(){
   		
		return $this->belongsTo('App\Category', 'post_cat_id', 'id');
		
	}
	public function get_photo(){
   		
		return $this->hasOne('App\Photo', 'photo_post_id', 'post_id');
		
	}
	
}
