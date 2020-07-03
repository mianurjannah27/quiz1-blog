<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
   protected $table = "tb_photo";
   protected $primaryKey = 'photo_id';
   protected $fillable = ['photo_date','photo_title','photo_text','photo_post_id'];
   
   public function get_post(){
   		
		return $this->belongsTo('App\Post', 'photo_post_id', 'post_id');
		
	}
	public function get_album(){
   		
		return $this->belongsToMany('App\Album', 'album_photo_id', 'photo_id');
		
	}
	 
}
