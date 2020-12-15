<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Slider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data = [
            'productos' => Producto::all(),
            'categorias' => Categoria::all(),
            'marcas' => Marca::all(),
            'sliders' => Slider::all()
        ];
        return view('admin.home.index', $data);
    }

    public function account()
    {
        return view('admin.account.index');
    }
}
