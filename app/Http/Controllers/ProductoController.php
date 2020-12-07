<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //FRONTEND HOME PRODUCTS
    public function home(){
        $productos = Producto::all();
        return view('shop.main-shop', ['productos' => $productos]);
    }

    //BACKEND INDEX OF PRODUCTS
    public function index()
    {
        $productos = Producto::all();
        return view('admin.productos.index', ['productos' => $productos]);
    }




    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:100',
            'price' => 'required|numeric',
            'oldprice' => 'numeric',
            'stock' => 'numeric'
        ]);
        $product = Producto::create($data);
        return redirect('/admin/productos/'. $product->id);
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
        //
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
