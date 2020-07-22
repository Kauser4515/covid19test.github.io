<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	protected $fillable = [
    	'id', 'name'
    ]; 
    public function user()
    {
    	return $this->belongsTo('App\user');
    }
    public function shops()
    {
    	return $this->belongsToMany('App\Shop')->withTimestamps();
    }
} 
