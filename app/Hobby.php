<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    public function user() { // user aja karena hanya 1 user relasinya
        return $this->belongsTo('App\User');
    }  
    
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];
}