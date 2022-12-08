<?php

namespace App\Http\Controllers;
use App\Models\Resource;
use App\Models\Experience;
use Auth;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userresourceinfo = Resource::where("resources_users_id", Auth::user()->id)->first();
        $expinfo = Experience::where("experience_users_id", Auth::user()->id)->first();

        return view('home')->with('resourceinfo', $userresourceinfo)->with('expinfo', $expinfo);
    }
}
