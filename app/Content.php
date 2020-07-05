<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use SoftDeletes;


    protected $fillable = [ 'title', 'type', 'section', 'status', 'slug',
        'image', 'youtube_link', 'body', 'user_id', ];


    public static $arrStatus = [
        'publish' => 'Publish',
        'unpublish' => 'Unpublish',
    ];

    public static $arrSection = [
        'section_1' => 'Section 1',
        'section_2' => 'Section 2',
    ];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }









}
