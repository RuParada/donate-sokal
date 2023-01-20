<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Title_en','Title_gr','slug','Content_en','Content_gr','image','created_at','updated_at'
    ];
}
