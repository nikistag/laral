<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * fillable field for a tag
     * 
     * @var array
     *  
     */
    
    
    protected $fillable = [
        'name',
    ];
    public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }
}
