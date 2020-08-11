<?php

namespace App\Http\Controllers;

use App\Skill;
use App\User;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function myresume()
    {
        $user = User::where('id', 1)->first();
        $social = $user->socials()->first();
        $works = $user->experiences()->get();
        $projects = $user->projects()->get();
        $frontends = Skill::where('category_id' , 1)->get();
        $backends = Skill::where('category_id' , 2)->get();
        $others = Skill::where('category_id' , 3)->get();
        return view('front.resume', compact('user', 'social' ,'works', 'projects', 'frontends' , 'backends', 'others'));
    }
}
