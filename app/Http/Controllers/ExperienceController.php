<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Skill;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('admin.exprience' ,compact('skills'));
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
            'company_name' => 'required|min:8|max:255',
            'my_post' => 'required',
            'description' => 'required',
            'join_date' => 'required',
            'tech_used' => 'required',
        ]);
        $tech_used = $request->input('tech_used');
        $tech_used = implode(',', $tech_used);

        $inputs = $request->except('tech_used');
        //Assign the "mutated" tech_used value to $input
        $inputs['tech_used'] = $tech_used;

        $inputs['user_id'] = auth()->user()->id;
        Experience::create($inputs);
        return redirect()->back()->with('success', 'Your Experience is successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        $experience = Experience::where('user_id', auth()->user()->id)->get();

        return view('admin.show-all-exprience', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $skills = Skill::all();
        $exp = Experience::where('id', $request->expId)->first();
        return view('admin.exprience-edit', compact('exp', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        
        $inputs = $request->validate([
            'company_name' => 'required|min:8|max:255',
            'my_post' => 'required',
            'description' => 'required',
            'join_date' => 'required',
            'tech_used' => 'required',
        ]);

        $experience = Experience::findOrFail($request->input('exp_id'));

        $tech_used = $request->input('tech_used');
        $tech_used = implode(',', $tech_used);

        $updateData = $request->except(['tech_used', 'exp_id']);
        $updateData['tech_used'] = $tech_used;
        $updateData['user_id'] = auth()->user()->id;

        $experience->update($updateData);

        $experience = Experience::where('user_id', auth()->user()->id)->get();

        return redirect()->route('all-experience')->with('success', 'Your Experience is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
