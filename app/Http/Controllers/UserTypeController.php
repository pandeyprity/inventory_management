<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("usertype.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UserType $userType)
    {
        // print_r($request->all());
        $userType = UserType::create([
            "user_type"=> $request->input("user_type"),
            "status"=> 1
        ]);
        return redirect("usertype/show");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function show(UserType $userType)
    {
        $usertypes = UserType::where("status", 1)->get();
        return view('UserType.show', ["usertypes"=> $usertypes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function edit($id, UserType $userType)
    {
        $usertype = UserType::find($id);
        return view('UserType.edit', ["usertype"=> $usertype]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, UserType $userType)
    {
        $usertype = UserType::find($id);
        // print_r($request->all());
        if ($usertype) {
            $usertype->user_type = $request->input('user_type');
            $usertype->save();
            return redirect("usertype/show");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, UserType $userType)
    {
        $usertype = UserType::find($id);
        $usertype->status = 0;
        $usertype->save();
        return redirect("usertype/show");
    }
}