<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;
use App\Cause;
use App\Event;
use App\Gallery;
use App\Post;
use App\Role;
use App\User;
use Session;
use Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResponseCauses
     */
    public function index()
    {
        //To Get All Gallery active OUT SIDE IN HOME VIEW
        $Gallers = Gallery::orderBy('created_at','desc')->paginate(200);
        
        
         return view('english.Gallery.index',compact('Gallery','Gallers')); 

         
        
    }
}
