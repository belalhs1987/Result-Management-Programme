<?php

namespace App;
use App\address;
use App\post;
use App\mobilenumber;
use App\Role;

use Illuminate\Database\Eloquent\Model;

class loginuser extends Model
{
    public function getAddress(){
    	return $this->hasOne(address::class);
    }
    
    public function getMobileNumber(){
    	return $this->hasOne(mobilenumber::class);
    }
    public function getPost(){
    	return $this->hasMany(post::class);
    }
    public function getRole(){
    	return $this->belognsToMany(Role::class);
    }
}
