<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    
    protected $dates = ['published_at'];
    
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id' // temporar
    ];
    
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());

    }
    
    public function setPublishedAtAttribute($date)
    {

        $this->attributes ['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

    }
    /**
     * An Article belongs to a user
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    
}
