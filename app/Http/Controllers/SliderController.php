<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        return view('admin.sliders.index', ['sliders' => Slider::all()]);
    }


    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'subtitle' => 'required|max:100',
            'text' => 'required|max:50',
            'img' => 'required'
        ]);
        Slider::create($request->all());
        return redirect('/admin/sliders');
    }


    public function show(Slider $slider)
    {
        //
    }


    public function edit(Slider $slider)
    {
        //
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required|max:100',
            'subtitle' => 'required|max:100',
            'text' => 'required|max:50',
            'img' => 'required'
        ]);

        $slider->update($request->all());
        return redirect('/admin/sliders');
    }


    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect('admin/sliders');
    }
}
