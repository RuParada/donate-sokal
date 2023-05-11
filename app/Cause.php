<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Cause extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Title_en','Title_gr','slug','Content_en','Content_gr','category_id','Raised','Goal','Donors','image','created_at','updated_at'
    ];

    // THIS function Category TO MAKE RELATHION Post 
     public function Category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
}
