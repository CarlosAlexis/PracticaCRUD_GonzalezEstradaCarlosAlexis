<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class customers extends Controller
{
    
    public function index()
    {
        $clientes=DB::table('clientes')
        ->get();
        return view('configClientes.showCustomer',['clientes'=>$clientes]);
    }

    
    public function create()
    {
        return view('configClientes.newCustomer');
    }


    public function save(Request $request)
    {
        $clientes=DB::table('clientes')->insert([
            'idcl'=>$request->input('idcl'),
            'nombre'=>$request->input('nombre'),
            'apellido'=>$request->input('apellido'),
            'direccion'=>$request->input('direccion'),
            'cPostal'=>$request->input('cPostal'),
            'telefono'=>$request->input('telefono')
            ]);
            return redirect()->action('customers@index');
    }

 
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        $clientes=DB::table('clientes')
        ->where('idcl','=',$id)
        ->first();
        return view('configClientes.newCustomer',['clientes'=>$clientes]);
    }

 
    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        $clientes=DB::table('clientes')
        ->where('idcl','=',$request->input('idcl'))
        ->update([
            'idcl'=>$request->input('idcl'),
            'nombre'=>$request->input('nombre'),
            'apellido'=>$request->input('apellido'),
            'direccion'=>$request->input('direccion'),
            'cPostal'=>$request->input('cPostal'),
            'telefono'=>$request->input('telefono')
            ]);
            return redirect()->action('customers@index')
            ->with('status','usuario actualizado');
    }


    public function destroy($id)
    {
        $clientes=DB::table('clientes')
        ->where('idcl','=',$id)
        ->delete();

            return redirect()->action('customers@index')
            ->with('status','usuario eliminado');
    }
}
