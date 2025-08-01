<?php

namespace App\Http\Controllers;

use App\Skill;
use App\User;
use PDF;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ResumeController extends Controller
{
    public function myresume()
    {
        $user = User::where('id', 1)->first();
        $social = $user->socials()->first();
        $works = $user->experiences()->orderBy('id', 'desc')->get();
        $projects = $user->projects()->get();
        $frontends = Skill::where('category_id' , 1)->get();
        $backends = Skill::where('category_id' , 2)->get();
        $others = Skill::where('category_id' , 3)->get();

        // $pdf = PDF::loadView('front.resume', compact('user', 'social' ,'works', 'projects', 'frontends' , 'backends', 'others'));
        // return $pdf->download('pdfview.pdf');
        return view('front.resume', compact('user', 'social' ,'works', 'projects', 'frontends' , 'backends', 'others'));
    }

    public function downloadResume(){
        $user = User::where('id', 1)->first();
        $social = $user->socials()->first();
        $works = $user->experiences()->orderBy('id', 'desc')->get();
        $projects = $user->projects()->get();
        $frontends = Skill::where('category_id' , 1)->get();
        $backends = Skill::where('category_id' , 2)->get();
        $others = Skill::where('category_id' , 3)->get();

        $works = $user->experiences()->orderBy('id', 'desc')->get()->map(function ($exp) {
            $joinDate = Carbon::parse($exp->join_date);
            $endDate = $exp->end_date ? Carbon::parse($exp->end_date) : Carbon::now();
            $diff = $joinDate->diff($endDate);

            $exp->duration = $diff->y . ' years' . ($diff->m ? ', ' . $diff->m . ' months' : '');
            return $exp;
        });

        $customPaper = array(0,0,1000,2200);

        $pdf = PDF::loadView('front.resume-pdf', compact('user', 'social' ,'works', 'projects', 'frontends' , 'backends', 'others'))->setPaper($customPaper,'portrait');
        return $pdf->stream('suraj-resume.pdf');
        // return $pdf->download('suraj-resume.pdf');
    }
}
