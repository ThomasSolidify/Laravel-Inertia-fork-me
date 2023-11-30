<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class IndexController extends Controller
{
    public function show(){
        return inertia('Index/Show');
    }

    public function index(){
       // dd(Listing::all());
       $listings = Listing::all(); // Now this will work

        return inertia('Index/Index',['message' => 'Hello from Laravel!']);
    }
}
