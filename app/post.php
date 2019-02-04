<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "posts";
   /* protected $fillable = [
    	 'post_title','user_id'];

    	 'post_title'];
    protected $fillable=[];*/
    protected $guarded = [
    	'user_id'];
    	protected $hidden =[
'user_id'
    	];
}
