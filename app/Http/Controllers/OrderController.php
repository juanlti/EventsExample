<?php

namespace App\Http\Controllers;

use App\Events\CreateOrdenEvent;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function create(){
//TODO
        //creo un objeto de tipo Orden
        $newOrden=Order::create([
            // datos? los que se encuetran en la tabla de migraciones
            'user_id'=>10,
            'amount'=>25,
        ]);

        //creo una factura. Forma NO recomendada. Pq no respecto el patron de SOLID
        //Invoice::create();

        // Forma recomendada:
        // creo un evento, indicar  que se creo una orden, y despachamos el objeto para que lo reciba un Listener
        // y utilizar ese objecto

        //despachamos el Evento
        CreateOrdenEvent::dispatch($newOrden);

        return  response()->json("Exito");


    }
}
