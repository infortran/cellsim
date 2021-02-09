<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'url' => 'required|max:100',
        ]);
        $social_id = $request->get('social');
        $social_url = $request->get('url');

        //dd($request->get('social'));
        Auth::user()->socials()->attach($social_id, ['url' => $social_url]);
        return redirect('/admin/cuenta');
    }


    public function show(Social $social)
    {
        //
    }


    public function edit(Social $social)
    {
        //
    }


    public function update(Request $request)
    {
        $request->validate([
            'url' => 'required|max:100',
        ]);
        dd($request->get('id'));
        return redirect('/admin/cuenta');
    }


    public function destroy($social)
    {
        Auth::user()->socials()->detach($social);
        return redirect('/admin/cuenta');
    }
}
