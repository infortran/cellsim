<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\ProductListComponent;
use App\Models\Producto;
use Illuminate\Http\Request;

class DisenoController extends Controller
{

    public function index(){
        //dd(ProductListComponent::first());
        $data = [
            'categorias' => Categoria::all(),
            'productos' => Producto::all(),
            'plc' => ProductListComponent::first()
        ];
        return view('admin.diseno.index', $data);
    }

    public function update(Request $request, ProductListComponent $plc){
        //dd($plc);
        $data = $request->validate([
            'title_section' => 'required|max:100',
            'title_banner' => 'required|max:100',
            'subtitle_banner' => 'required|max:100',
            'price_banner' => 'required|max:6',
            'categoria_id' => '',
            'img_banner' => 'nullable|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=300,min_height=616'
        ]);

        $plc->update($data);
        return redirect('admin/diseno');
    }
}
