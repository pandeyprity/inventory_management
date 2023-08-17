<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
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
        //
        $usertypes = Brand::all();
        return view("brand.create", ["brandtypes"=> $usertypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Brand $brand)
    {

        $record = Brand::create([
            "name" => $request->input("name"),
            "code" => $request->input("code"),
            "description" => $request->input("description"),
            "status"=> 1,
            
        ]);
        return redirect("/brand/show");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        // 
        $user = Brand::all();
        return view("brand.show", ["list" => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Brand $brand)
    {
        //
        $brandtype = Brand::find($id);
        return view('brand.edit', ["brandtype"=> $brandtype]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Brand $brand)
    {
        //
        $record = Brand::find($id);
        // print_r($request->all());
        if ($record) {
            $record->name = $request->input('name');
            $record->code = $request->input('code');
            $record->description = $request->input('description');
           
            $record->save();
            return redirect("brand/show");
        }
    }


    public function delete($id, Brand $brand)
    {
        //
        $record = Brand::find($id);
        $record->delete();
        return redirect("/brand/show");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
