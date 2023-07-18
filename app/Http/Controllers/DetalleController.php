<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Detalle;
use App\Models\Listname;
use App\Models\Item;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listnames = Listname::all();
        $categories= Category::all();



        return view("detalle/producto", compact("listnames", "categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id, $item)
    {


    $item = Item::findOrFail($item->id);

    // Eliminar las relaciones establecidas antes de eliminar el item
    $item->relacion()->delete();

    // Eliminar el item
    $item->delete();

    return redirect()->back()->with('status', 'Item eliminado con éxito');


    }
}
