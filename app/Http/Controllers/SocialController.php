<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{

    public function index()
    {
        return view('admin.socials.index', ['socials' => Social::all()]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'url' => 'required|max:100',
            'uri' => 'required|max:50'
        ]);
        Social::create($request->all());
        return redirect('/admin/socials');
    }


    public function show(Social $social)
    {
        //
    }


    public function edit(Social $social)
    {
        //
    }


    public function update(Request $request, Social $social)
    {
        $request->validate([
            'name' => 'required|max:100',
            'url' => 'required|max:100',
            'uri' => 'required|max:50'
        ]);
        $social->update($request->all());
        return redirect('/admin/socials');
    }


    public function destroy(Social $social)
    {
        $social->delete();
        return redirect('/admin/socials');
    }
}
