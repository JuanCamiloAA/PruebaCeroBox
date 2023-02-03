<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\detalle_service;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function detalle($id)
    {
        // dd($id);
        
        $cliente = Client::find($id);
        $service_as = detalle_service::all()->where('Client_id', $id);
        return view('DetailClient', compact('cliente', 'service_as'));
    }
}
