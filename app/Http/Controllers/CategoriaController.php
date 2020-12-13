<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        $data = ['categorias' => Categoria::all()];
        return view('admin.categorias.index', $data);
    }


    public function create()
    {
        return view('admin.categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'text' => 'required|max:100'
        ]);

        Categoria::create($request->all());
        return redirect('/admin/categorias');
    }

    public function show(Categoria $categoria)
    {
        //
    }

    public function edit(Categoria $categoria)
    {
        //
    }

    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'name' => 'required|max:100',
            'text' => 'required|max:100'
        ]);

        $categoria->update($request->all());
        return redirect('/admin/categorias');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect('/admin/categorias');
    }
}
