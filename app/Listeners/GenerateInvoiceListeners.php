<?php

namespace App\Listeners;

use App\Events\CreateOrdenEvent;
use App\Models\Invoice;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GenerateInvoiceListeners
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CreateOrdenEvent $newOrder): void
    {
        //
        Invoice::create([
          'amount'=>$newOrder->otherOrder->amount(),

            //order_id le asinog el adi de otherOrder de su id
            'order_id'=>$newOrder->otherOrder->id,
        //creo la conexion de Orden a Factura
            // otro Invoice





        ]);
    }
}
