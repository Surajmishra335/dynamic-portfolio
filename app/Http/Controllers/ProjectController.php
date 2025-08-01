<?php

namespace App\Http\Controllers;

use App\User;
use App\Skill;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = User::all()->first();
        $social = $name->socials()->first();
        $projects = Project::all();
        return view('front.projects', compact('projects', 'social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user = auth()->user()->id;
        $skills = Skill::all();
        return view('admin.project' ,compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = request()->validate([
            'name' => 'required|min:8|max:255',
            'description' => 'required',
            'skills' => 'required',
            'photo' => 'required|image',
            // 'challenges' => 'required',
            'github' => 'url',
            // 'live' => 'url',
            // 'youtube' => 'url',
        ]);
        $skills = $request->input('skills');
        $skills = implode(',', $skills);

        $inputs = $request->except('skills');
        //Assign the "mutated" skills value to $input
        $inputs['skills'] = $skills;
        if ($request->has('feture')) {
            $inputs['is_fetured'] = 1;
        }
        $inputs['user_id'] = auth()->user()->id;
        $inputs['photo'] = 'img/'.$request->photo->store('');  
        Project::create($inputs);
        return redirect()->back()->with('success', 'Your Project is successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
