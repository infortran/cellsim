<?php

namespace App\Http\Controllers;

use App\Models\ProductComponent;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use Image;
use App\Tools;

class ProductComponentController extends Controller
{
    private $resolutions = [[300,616],[72,72]];
    private $path = 'uploads/plc';

    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.diseno.plc.create', ['categorias' => Categoria::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title_section' => 'required|max:100',
            'title_banner' => 'required|max:100',
            'subtitle_banner' => 'required|max:100',
            'price_banner' => 'required|max:6',
            'categoria_id' => 'required',
            'max_products' => 'numeric',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=300,min_height=616'
        ]);
        $img = $request->file('img');
        $imageName = time().'.'.$img->extension();
        $imgResize = Image::make($img->path());
        Tools::processImage($imgResize, $imageName, $this->path, true, $this->resolutions);
        $data['img'] = $imageName;
        ProductComponent::create($data);

        return redirect('/admin/diseno');
    }

    public function show(ProductComponent $productComponent)
    {
        //
    }

    public function edit(ProductComponent $plc)
    {
        return view('admin.diseno.plc.edit', [
            'plc' => $plc,
            'categorias' => Categoria::all()
        ]);
    }

    public function update(Request $request, ProductComponent $plc)
    {
        $data = $request->validate([
            'title_section' => 'required|max:100',
            'title_banner' => 'required|max:100',
            'subtitle_banner' => 'required|max:100',
            'price_banner' => 'required|max:6',
            'categoria_id' => '',
            'max_products' => 'numeric',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=300,min_height=616'
        ]);

        if($request->img){
            $img = $request->file('img');
            $imageName = time().'.'.$img->extension();
            $imgResize = Image::make($img->path());

            Tools::processImage($imgResize, $imageName, $this->path, true, $this->resolutions);
            $data['img'] = $imageName;
            Tools::deleteImage($plc->img, $this->path, $this->resolutions);
        }
        //dd($data['img_banner']);
        $plc->update($data);
        return redirect('admin/diseno');
    }

    public function destroy(ProductComponent $plc)
    {
        Tools::deleteImage($plc->img, $this->path, $this->resolutions);
        $plc->delete();
        return redirect('admin/diseno');
    }
}