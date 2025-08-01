<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //   dd($request->all());
         $inputs = request()->validate([
            'title'=> 'required|min:8|max:255',
            'description'=>'required',
            'phone'=>'required|integer',
            'photo'=>'image',
            'education'=>'required',
            'carrer_summery'=>'required'
        ]);
        $inputs['user_id'] = auth()->user()->id;

        if (isset($request->photo)) {
            $inputs['photo'] = 'img/'.$request->photo->store('');
        }
        
        // dd($inputs);
        if (isset($request->updateFlag) && $request->updateFlag == 1) {
            $profileId = $request->profileId;
            Profile::where('id', $profileId)->update($inputs);
            return redirect()->back()->with('success', 'Your profile updation is successfully updated!');
        }else{
            Profile::create($inputs);
            return redirect()->back()->with('success', 'Your profile updation is successfully updated!');
        }   
        
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        $profile = Profile::where('user_id', auth()->user()->id)->first();
        // dd($profile);
        return view('admin.profile-show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
