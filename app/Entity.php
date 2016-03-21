<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $fillable = [
        'title', 'slug', 'facebook_id',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
