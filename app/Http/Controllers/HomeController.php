<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = Location::find(1);
        return view('home')->with('location', $location);
    }

    public function open($id) {
        $currenttime = Carbon::now()->timezone('America/Nassau');
        $time = $currenttime->hour > 6 && $currenttime->hour < 19;
        $location = Location::findOrFail($id);
        if (!$location->exists()) {
            return view('error');
        } elseif($location->id == '' or $location->id == NULL or !$location->id){
            $location = Location::find(1);
            return view('home')->with('location', $location)->with('currenttime', $time);
        } else {
            return view('home')->with('location', $location)->with('currenttime', $time);
        }
    }
}
