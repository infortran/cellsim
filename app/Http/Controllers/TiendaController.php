<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Tienda;
use Illuminate\Http\Request;
use App\Tools;
use Image;

class TiendaController extends Controller
{
    private $resolutions_for_main_images = [[600,600], [300,300], [150,150], [72,72]];

    public function nuestras_tiendas(){
        $data = [
            'categorias' => Categoria::all(),
            'marcas' => Marca::all(),
            'tiendas' => Tienda::all()
        ];
        return view('nuestras-tiendas.index', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'status' => '',
            'direction' => 'required|max:100',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
            'phone' => 'required|max:30',
            'schedule' => 'required|max:60',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=600,min_height=600'
        ]);

        $img = $request->file('img');
        $imageName = time().'.'.$img->extension();
        $imgResize = Image::make($img->path());
        $path = 'uploads/tiendas';
        Tools::processImage($imgResize, $imageName, $path, true, $this->resolutions_for_main_images);
        $data['img'] = $imageName;

        $data['status'] = $request->status === 'on' ? true : false;
        Tienda::create($data);
        return redirect('/admin/cuenta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function show(Tienda $tienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function edit(Tienda $tienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tienda $tienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tienda $tienda)
    {
        //
    }
}
