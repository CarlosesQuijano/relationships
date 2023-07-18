<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Item;
use App\Models\Listname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgregarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listnames = Listname::all();
        $categories= Category::all();



        return view("item/index", compact("listnames", "categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {




            $item = new Item();
            $item-> name= $request->input('name');
            $item-> note = $request-> input("note");
            $item-> image= $request->input("image");
            $item-> category_id =$request->input("category");
            $item->save();
            return redirect()->route("item.index");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
