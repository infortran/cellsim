<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = [
            'categorias' => Categoria::all()
        ];
        return view('home.template', $data);
    }

    public function login()
    {
        return view('account.account');
    }
}
