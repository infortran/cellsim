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
    private $resolutions = [[600,600], [300,300], [150,150], [72,72]];
    private $path = 'uploads/productos';
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
            'oldprice' => '',
            'stock' => 'numeric',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=600,min_height=600',
            'categoria_id' => 'numeric',
            'marca_id' => 'numeric',
            'slug' => 'required|string|unique:productos'
        ]);
        $img = $request->file('img');
        $imageName = time().'.'.$img->extension();
        $imgResize = Image::make($img->path());
        Tools::processImage($imgResize, $imageName, $this->path, true, $this->resolutions);
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
        //$producto = Producto::where('slug', $slug)->first();
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
            'marcas' => Marca::all()
        ]);
    }


    public function update(Request $request, Producto $producto)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:100',
            'price' => 'required|numeric',
            'oldprice' => '',
            'stock' => 'numeric',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=600,min_height=600',
            'categoria_id' => '',
            'marca_id' => '',
            'slug' => 'required|string'
        ]);
        if($request->img){
            $img = $request->file('img');
            $imageName = time().'.'.$img->extension();
            $imgResize = Image::make($img->path());

            Tools::processImage($imgResize, $imageName, $this->path, true, $this->resolutions);
            $data['img'] = $imageName;
            Tools::deleteImage($producto->img, $this->path, $this->resolutions);
        }
        $producto->update($data);
        return redirect('admin/productos');
    }


    public function destroy(Producto $producto)
    {
        Tools::deleteImage($producto->img, $this->path, $this->resolutions);
        $producto->delete();
        return redirect('admin/productos');
    }
}
