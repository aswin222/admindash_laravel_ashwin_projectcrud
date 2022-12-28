<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;

use Illuminate\Http\Request;
use Auth;

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


        $project = Project::count();


        if(Auth::user()->isAdmin() || Auth::user()->isSuperAdmin() || Auth::user()->isUser())
        {
            return view('admin.index', compact('project'));
        }

    }
}
