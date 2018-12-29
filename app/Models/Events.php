<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['title', 'description'];

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    protected static function boot()
    {
    	parent::boot();

    	static::creating(function($event){


    		$event->slug = str_slug($event->title);

    	});
    }
}
