<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $table = "tb_category";
  
   protected $fillable = ['cat_name', 'cat_text'];
   public function get_post(){
   	return $this->hasMany('App\Post','post_cat_id','id');
   }
  
}
