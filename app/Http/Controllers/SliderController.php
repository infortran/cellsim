<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Slider;
use App\Tools;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{

    public function index()
    {
        return view('admin.sliders.index', ['sliders' => Slider::all()]);
    }


    public function create()
    {
        return view('admin.sliders.create', ['productos' => Producto::all()]);
    }
    public function store(Request $request)
    {
        $resolutions = [[600,600], [300,300], [150,150], [72,72]];
        $data = $request->validate([
            'title' => 'required|max:100',
            'subtitle' => 'required|max:100',
            'text' => 'required|max:50',
            'price' => 'required|numeric',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=600,min_height=600',
            'producto_id' => 'required'
        ]);
        $img = $request->file('img');
        $imageName = time().'.'.$img->extension();
        $imgResize = Image::make($img->path());
        $path = 'uploads/sliders';
        Tools::processImage($imgResize, $imageName, $path, false,$resolutions);
        $data['img'] = $imageName;
        Slider::create($data);
        return redirect('/admin');
    }


    public function show(Slider $slider)
    {
        //
    }


    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', [
            'slider' => $slider,
            'productos' => Producto::all()
        ]);
    }

    public function update(Request $request, Slider $slider)
    {
        $resolutions = [[1000, 1000],[600,600], [300,300], [150,150], [72,72]];
        $data = $request->validate([
            'title' => 'required|max:100',
            'subtitle' => 'required|max:100',
            'text' => 'required|max:50',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=800,min_height=600',
            'producto_id' => 'required'
        ]);
        if($request->img){
            $img = $request->file('img');
            $imageName = time().'.'.$img->extension();
            $imgResize = Image::make($img->path());
            $path = 'uploads/sliders';
            Tools::processImage($imgResize, $imageName, $path, false,$resolutions);
            $data['img'] = $imageName;
        }
        //dd($request->img);
        $slider->update($data);
        return redirect('/admin');
    }


    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect('/admin');
    }
}
