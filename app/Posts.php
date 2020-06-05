<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Posts extends Model
{
    //
    public $timestamps = true;

    protected $fillable = array(
        'content',
        'posted_at',
    );

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    protected $casts = [  
        'skills' => 'array' ];
}
