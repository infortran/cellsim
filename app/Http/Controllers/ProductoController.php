<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Tools;
use Illuminate\Http\Request;
use Image;

class ProductoController extends Controller
{
    //FRONTEND HOME PRODUCTS
    public function shop(){
        return view('shop.main-shop', ['productos' => Producto::all()]);
    }

    //BACKEND INDEX OF PRODUCTS
    public function index()
    {
        return view('admin.productos.index', ['productos' => Producto::all()]);
    }

    public function create()
    {
        return view('admin.productos.create');
    }

    public function store(Request $request)
    {
        //dd($request->enabled);
        $data = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:100',
            'price' => 'required|numeric',
            'oldprice' => 'numeric',
            'stock' => 'numeric',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=800,min_height=600'
        ]);
        $img = $request->file('img');
        $imageName = time().'.'.$img->extension();
        $imgResize = Image::make($img->path());

        Tools::processImage($imgResize, $imageName);
        $data['enabled'] = $request->enabled === 'on' ? true : false;
        $data['img'] = $imageName;
        Producto::create($data);

        return redirect('/admin/productos/');
    }


    public function show(Producto $producto)
    {
        return view('admin.productos.single', ['producto' => $producto]);
    }

    public function single(Producto $producto)
    {
        return view('single.single', ['producto' => $producto]);
    }


    public function edit(Producto $producto)
    {
        return view('admin.productos.edit', ['producto' => $producto]);
    }


    public function update(Request $request, Producto $producto)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:100',
            'price' => 'required|numeric',
            'oldprice' => 'numeric',
            'stock' => 'numeric'
        ]);
        $producto->update($data);
        return redirect('admin/productos/');
    }


    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect('/admin/productos');
    }
}
