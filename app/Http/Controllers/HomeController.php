<?php

namespace App\Http\Controllers;

use App\Social;
use App\User;
use App\Profile;
use App\Project;
use App\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function about()
    {
        $user = User::find(1)->id;
        $name = User::all()->first();
        $profile = Profile::where('user_id', $user)->first();
        $social = $name->socials()->first();
        $frontend = Skill::where('category_id', 1)->get();
        $backend = Skill::where('category_id', 2)->get();
        $other = Skill::where('category_id', 3)->get();
        $projects = Project::where('is_featured', 1)->get();
        return view('front.about', compact('name', 'profile', 'frontend', 'backend','other', 'projects','social'));
    }

    public function header()
    {
       /*  $user = User::where('id', 1)->first();
        $social = $user->socials()->first();
        return view('front.front', compact('user', 'social')); */
    }
}
