<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Cloudder;
use Cloudinary;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = member::all();
        return view('welcome',['all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate(request(),[
        'name'=> 'required',
        'phone' => 'required'
       ]);
       if ($request->hasFile('image')) {
            // $profile = '_profileImage'.time().'.'.request()->image->getClientOriginalExtension();
            // $request->image->storeAs('public/profile',$profile);
            $image_name = $request->file('image')->getRealPath();

            Cloudder::upload($image_name, null);
            $image_url= Cloudder::show(Cloudder::getPublicId());
            
            $member= new Member();
            $member->image =  $image_url;
            $member->name = $request->name;
            $member->email = $request->email;
            $member->year = $request->year;
            $member->phone = $request->phone;
            
            if($member->save()){
                return redirect(route('welcome'))->with('success','Profile Added!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
