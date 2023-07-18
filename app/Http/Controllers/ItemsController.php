<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Listname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listnames = Listname::all();
        $categories= Category::all();



        return view("welcome", compact("listnames", "categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     "name" => ["required"],
        //     "note" => ["required"],
        //     "image" => ["nullable"],
        //     "category_id" => ["required"],

        //     ]);
        //     if($validator->fails()){
        //         return back() -> with("errorValidator", "Los datos en el formulario no son los correctos");
        //     }

        //    Item::create([
        //     "name" => $request->name,
        //     "note" => $request->note,
        //     "image" => $request->image,

        //    ])->assignCategory($request->category);
        //    return redirect()->route("item/index")->with("status", "Usuario creado con éxito");

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
