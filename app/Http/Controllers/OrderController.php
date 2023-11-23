<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->json()->all();

        // Validar los datos según tus necesidades

        $order = Order::create([
            'customer_name' => $data['customer_name'],
            'product_name' => $data['product_name'],
            'quantity' => $data['quantity'],
        ]);

        return response()->json(['mensaje' => 'Orden de compra almacenada con éxito', 'orden' => $order]);
    }
}
