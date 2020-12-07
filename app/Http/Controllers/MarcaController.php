<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{



    public function index()
    {
        $data = ['marcas' => Marca::all()];
        return view('admin.marcas.index', $data);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'text' => 'required|max:100',
            'img' => 'required|max:100'
        ]);

        Marca::create($request->all());
        return redirect('admin/marcas');
    }


    public function show(Marca $marca)
    {
        //
    }


    public function edit(Marca $marca)
    {
        //
    }



    public function update(Request $request, Marca $marca)
    {
        $request->validate([
            'name' => 'required|max:100',
            'text' => 'required|max:100',
            'img' => 'required|max:100'
        ]);

        $marca->update($request->all());
        return redirect('admin/marcas');
    }


    public function destroy(Marca $marca)
    {
        $marca->delete();
        return redirect('admin/marcas');
    }
}
