<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Item;
use App\Models\Listname;
use Livewire\Component;

class MyItem extends Component
{
    public $search;
    public function render()
    {

        
        $categories= Category::all();
        $items = Item::where("name" , "LIKE", "%". $this->search . "%")->get();
        return view('livewire.my-item' , compact("items", "categories"));
    }
}
