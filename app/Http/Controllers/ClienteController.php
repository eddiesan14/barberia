<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cliente.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create'); 
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
    public function show($id =0)
    {
        return view("cliente.show",['id'=> $id=0]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id = 0)
    {
        return view("cliente.edit",['id'=> $id=0]);
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
    public function destroy($id=0)
    {
        return view("cliente.destroy",['id'=> $id=0]);
    }

    //
}
