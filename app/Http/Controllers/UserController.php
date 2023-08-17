<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
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
    public function signupuser(Request $request, User $user)
    {
        $isSaved = User::create([
            "name"=> $request->input("name"),
            "mobile_no"=> $request->input("mobile_no"),
            "email"=> $request->input("email"),
            "password"=> $request->input("password"),
            "user_type_id"=> 1
        ]);
        if($isSaved){
            return redirect("/");
        }
        else {
            return redirect("/signup");
        }
    }


    public function login(Request $request, User $user){
        $email = $request->input("email");
        $password = $request->input("password");

        $user = User::where("email", $email)
                        ->where("password", $password)->first();
        if($user){
            Session::put("user", $user);
            return redirect("/user/show");
        }
        else {
            return redirect("/");
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $user = User::all();
        return view("user.show", ["list" => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $usertypes = UserType::all();
        return view("user.create", ["usertypes"=> $usertypes]);
    }

    public function store(Request $request, User $user)
    {

        $record = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "mobile_no" => $request->input("mobile_no"),
            "password" => $request->input("password"),
            "user_type_id" => $request->input("user_type_id"),
        ]);
        return redirect("/user/show");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id, User $user)
    {
        $user = User::findOrFail($id);
        $userTypes = UserType::all(); // Fetch all user types from the 'tbl_user_type' table

        return view('user.edit', ["user"=> $user, "userTypes"=> $userTypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, User $user)
    {
        //
        $record = User::find($id);
        // print_r($request->all());
        if ($record) {
            $record->name = $request->input('name');
            $record->email = $request->input('email');
            $record->password = $request->input('password');
            $record->mobile_no = $request->input('mobile_no');
            $record->user_type_id = $request->input("user_type_id");
            $record->save();
            return redirect("user/show");
        }
    }


    public function delete($id, User $user)
    {
        //
        $record = User::find($id);
        $record->delete();
        return redirect("/user/show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}