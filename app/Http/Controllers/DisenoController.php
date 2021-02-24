<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\ProductComponent;
use App\Models\Producto;
use Illuminate\Http\Request;
use Image;
use App\Tools;

class DisenoController extends Controller
{
    private $resolutions = [[300,616]];
    private $path = 'uploads/plc';

    public function index(){
        //dd(ProductListComponent::first());
        $data = [
            'categorias' => Categoria::all(),
            'productos' => Producto::all(),
            'plc' => ProductComponent::all()
        ];
        return view('admin.diseno.index', $data);
    }
}
