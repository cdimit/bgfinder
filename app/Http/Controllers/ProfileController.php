<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Auth;
use Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Auth::user()->profile;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return $profile;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('profile.edit')->withProfile(Auth::user()->profile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $profile = Auth::user()->profile;

      $form_rules = [
              'name'  => '',
              'gender'  => '',
              'birthday'  => 'date|nullable',
              'country' => '',
              'about'      => '',
              'phone'       => ''
      ];

      if (Auth::check()){
              $v = \Validator::make($request->all(), $form_rules);
      }

      if ($v->fails()) {
              return redirect()->back()->withErrors($v);
      }

      $default_pic = "/profiles/profile.jpg";

      if(!empty($request['picture'])){
        $pic = $request['picture']->store('profiles');
        if($profile->picture!=$default_pic){
          Storage::delete('/'.$profile->picture); //delete the previous image from server
          // Storage::move($profile->picture, 'trash/'.$user->id.'/'.$profile->picture);
        }
      }else{
        $pic=$profile->picture;
      }

      $profile->name = $request['name'];
      $profile->picture = $pic;
      $profile->gender = $request['gender'];
      $profile->birthday = $request['birthday'];
      $profile->about = $request['about'];
      $profile->country = $request['country'];
      $profile->phone = $request['phone'];
      $profile->save();

      return redirect()->back()->withStatus("Profile was successfully edited!");

    }
}
