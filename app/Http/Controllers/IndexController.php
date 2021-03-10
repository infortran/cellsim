<?php

namespace App\Http\Controllers;

use App\Models\BannerHome;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\ProductComponent;
use App\Models\Producto;
use App\Models\Slider;
use App\Models\Tienda;
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
            'mainbanner' => BannerHome::first(),
            'productos' => Producto::all(),
            'plc' => ProductComponent::all(),
            'tienda' => Tienda::first()
            /*'plc' =>
                ['title' => 'titulo de prueba',
                'img' => 'img-dinamic.jpg',
                'title_banner' => 'titulo banner',
                'subtitle_banner' => 'subtitulo',
                'price_banner' => 60000,
                'productos' => Producto::all()]*/
        ];
        return view('home.template', $data);
    }

    public function login()
    {
        return view('account.account');
    }

    public function search(Request $request){
        //dd(request('query'));
        $data = [
            'categorias' => Categoria::all(),
            'productos' => Producto::all(),
            'marcas' => Marca::all(),
            'query' => request('query'),
            'query_result' => Producto::where('name', 'LIKE', '%' . request('query') . '%')->
                orWhere('description', 'LIKE', '%' . request('query') . '%')->orderBy('created_at', 'ASC')->paginate(9)
        ];
        //dd($data['query_result']);
        return view('busqueda.index', $data);
    }

}
