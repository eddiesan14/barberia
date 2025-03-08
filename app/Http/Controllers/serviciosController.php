<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviciosController extends Controller
{
    public function index()
    {
        return view('servicios.index');
    }
}
