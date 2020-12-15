<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = [
            'categorias' => Categoria::all(),
            'sliders' => Slider::all()
        ];
        return view('home.template', $data);
    }

    public function login()
    {
        return view('account.account');
    }
}
