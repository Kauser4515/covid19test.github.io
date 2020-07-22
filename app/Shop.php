<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
	protected $fillable = [
    	'id', 'title', 'link', 'image', 'address'
    ]; 
    public function locations()
    {
    	return $this->belongsToMany('App\Location')->withTimestamps();
    }
} 
