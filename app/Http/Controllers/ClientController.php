<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\detalle_service;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function __construct()
     {
         $this->middleware('auth'); 
     }
    public function index()
    {
        // dd("Clientes");
        $clientes = Client::all();
        // dd($clientes);
        return view('pages.client.List', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.client.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        // dd($inputs);

        $create = Client::create([
            'name' => $inputs['name'],
            'Document' => $inputs['Document'],
            'email' => $inputs['email'],
            'Phone' => $inputs['Phone'],
            'Observation' => $inputs['Observation'],
            'State'=> 1,

        ]);
        return redirect()->route('client.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Client::find($id);
        $service_as = detalle_service::all()->where('Client_id', $id);
        // dd($service_as);
        // dd($id);

        return view('pages.client.Detail', compact('cliente', 'service_as'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Client::find($id);

        return view("pages.client.Edit", compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = $request->all();

        $cliente = Client::find($id);

        $cliente->update([
            'name' => $inputs['name'],
            'Document' => $inputs['Document'],
            'email' => $inputs['email'],
            'Phone' => $inputs['Phone'],
            'Observation' => $inputs['Observation'],
        ]);
        
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ChangeState($id, $state)
    {
        // dd($state);
        $cliente = Client::find($id);

        if ($state == 0) {
            $cliente->update([
                'State'=>1,
            ]);
        }else {
            $cliente->update([
                'State'=>0,
            ]);
        }
         return redirect()->route('client.index');
    }
}
