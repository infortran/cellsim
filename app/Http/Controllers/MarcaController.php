<?php
namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Producto;
use App\Tools;
use Illuminate\Http\Request;
use Image;

class MarcaController extends Controller
{
    private $resolutions_for_main_images = [[500,300]];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = ['marcas' => Marca::all()];
        return view('admin.marcas.index', $data);
    }


    public function create()
    {
        return view('admin.marcas.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'text' => 'required|max:100',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=500,min_height=300'
        ]);

        $img = $request->file('img');
        $imageName = time().'.'.$img->extension();
        $imgResize = Image::make($img->path());
        $path = 'uploads/marcas';
        Tools::processImage($imgResize, $imageName, $path, true, $this->resolutions_for_main_images);
        $data['img'] = $imageName;

        Marca::create($data);
        return redirect('admin/marcas');
    }


    public function show(Marca $marca)
    {
        //
    }


    public function edit(Marca $marca)
    {
        return view('admin.marcas.edit', [
            'marca' => $marca
        ]);
    }



    public function update(Request $request, Marca $marca)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'text' => 'required|max:100',
            'img' => 'image|mimes:jpeg,png,jpg'
        ]);
        if($request->img){
            $img = $request->file('img');
            $imageName = time().'.'.$img->extension();
            $imgResize = Image::make($img->path());
            $path = 'uploads/marcas';
            Tools::processImage($imgResize, $imageName, $path, true, $this->resolutions_for_main_images);
            $data['img'] = $imageName;

            Tools::deleteImage($marca->img, $path, $this->resolutions_for_main_images);
        }

        $marca->update($data);
        return redirect('admin/marcas');
    }


    public function destroy(Marca $marca)
    {
        $marca->delete();
        return redirect('admin/marcas');
    }
}
