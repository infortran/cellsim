<?php

namespace App\Http\Controllers;

use App\Models\BannerHome;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $data = [
            'categorias' => Categoria::all(),
            'sliders' => Slider::all(),
            'marcas' => Marca::all(),
            'ultimos' => Producto::orderBy('id', 'desc')->limit(6)->get(),
            'mainbanner' => BannerHome::first()
        ];
        return view('home.template', $data);
    }

    public function login()
    {
        return view('account.account');
    }
}
