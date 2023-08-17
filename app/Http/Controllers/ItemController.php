<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
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
    public function create(Item $item)
    {
        //
        $brands = Brand::all();
        return view("item.create", ["brands"=> $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
   
        $record = Item::create([
            "name" => $request->input("name"),
            "code" => $request->input("code"),
            "price" => $request->input("price"),
            "description" => $request->input("description"),
            "brand_id" => $request->input("brand_id"),
        ]);
        return redirect("/item/show");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
        $user = Item::all();
        return view("item.show", ["list" => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Item $item)
    {
        //
        $user = Item::findOrFail($id);
        $brands = Brand::all(); // Fetch all user types from the 'tbl_user_type' table

        return view('item.edit', ["user"=> $user, "brands"=> $brands]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Item $item)
    {
        //
         //
         
         $record = Item::find($id);
         // print_r($request->all());
         if ($record) {
             $record->name = $request->input('name');
             $record->code = $request->input('code');
             $record->price = $request->input('price');
             $record->description = $request->input('description');
             $record->brand_id = $request->input("brand_id");
             $record->save();
             return redirect("item/show");
         }
    }

    public function delete($id,  Item $item)
    {
        //
        $record = Item::find($id);
        $record->delete();
        return redirect("/item/show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
