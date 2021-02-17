<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'email' => 'required|unique:clientes|email'
        ]);
        Cliente::create($data);
        return redirect('/');
    }
}
