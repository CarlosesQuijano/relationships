<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Item;
use Livewire\Component;

class Detalle extends Component
{
    public $search;
    public function render()
    {


        $categories= Category::all();
        $items = Item::where("name" , "LIKE", "%". $this->search . "%")->get();
        return view('producto.detalle' , compact("items", "categories"));
    }
}
