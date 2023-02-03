<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        // dd("Servicios");
        $servicios = service::all();
        // dd($servicios);
        return view('pages.service.List', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.service.Create');
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

        $create = Service::create([
            'name' => $inputs['name'],
            'State'=> 1,

        ]);
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = service::find($id);

        return view("pages.service.Edit", compact('servicios'));
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

        $servicio = service::find($id);

        $servicio->update([
            'name' => $inputs['name'],
        ]);
        
        return redirect()->route('service.index');
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
        $servicio = service::find($id);

        if ($state == 0) {
            $servicio->update([
                'State'=>1,
            ]);
        }else {
            $servicio->update([
                'State'=>0,
            ]);
        }
         return redirect()->route('service.index');
    }
}
