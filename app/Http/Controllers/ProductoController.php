<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use App\Tools;
use Illuminate\Http\Request;
use Image;

class ProductoController extends Controller
{
    private $resolutions_for_main_images = [[1000, 1000],[600,600], [300,300], [150,150], [72,72]];
    //FRONTEND HOME PRODUCTS
    public function shop()
    {
        return view('shop.shop', ['productos' => Producto::all()]);
    }

    //BACKEND INDEX OF PRODUCTS
    public function index()
    {
        return view('admin.productos.index', ['productos' => Producto::all()]);
    }

    public function create()
    {
        return view('admin.productos.create', ['categorias' => Categoria::all(), 'marcas' => Marca::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:100',
            'price' => 'required|numeric',
            'oldprice' => 'numeric',
            'stock' => 'numeric',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1000,min_height=1000',
            'categoria_id' => 'numeric',
            'marca_id' => 'numeric'
        ]);
        $img = $request->file('img');
        $imageName = time().'.'.$img->extension();
        $imgResize = Image::make($img->path());
        $path = 'uploads/productos';
        Tools::processImage($imgResize, $imageName, $path, true, $this->resolutions_for_main_images);
        $data['img'] = $imageName;

        $data['enabled'] = $request->enabled === 'on' ? true : false;
        Producto::create($data);

        return redirect('/admin/productos/');
    }


    public function show(Producto $producto)
    {
        $data = [
            'categorias' => Categoria::all(),
            'marcas' => Marca::all(),
            'producto' => $producto
        ];
        return view('admin.productos.single', $data);
    }

    public function single(Producto $producto)
    {
        $data = [
            'categorias' => Categoria::all(),
            'marcas' => Marca::all(),
            'producto' => $producto
        ];
        return view('single.single', $data);
    }


    public function edit(Producto $producto)
    {
        return view('admin.productos.edit', [
            'producto' => $producto,
            'categorias' => Categoria::all(),
            'marcas' => Marca::all()]);
    }


    public function update(Request $request, Producto $producto)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:100',
            'price' => 'required|numeric',
            'oldprice' => '',
            'stock' => 'numeric',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1000,min_height=1000',
            'categoria_id' => '',
            'marca_id' => ''
        ]);
        if($request->img){
            $img = $request->file('img');
            $imageName = time().'.'.$img->extension();
            $imgResize = Image::make($img->path());
            $path = 'uploads/productos';
            Tools::processImage($imgResize, $imageName, $path, true, $this->resolutions_for_main_images);
            $data['img'] = $imageName;

            Tools::deleteImage($producto->img, $path, $this->resolutions_for_main_images);
        }

        $producto->update($data);
        return redirect('admin/productos');
    }


    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect('admin/productos');
    }
}
