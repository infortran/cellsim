<?php

namespace App\Http\Controllers;

use App\Models\BannerHome;
use Illuminate\Http\Request;

class BannerHomeController extends Controller
{
    public function index(){

    }

    public function show(){

    }

    public function create(){

    }

    public function edit(){

    }

    public function store(){

    }

    public function update(Request $request, $banner){
        $banner = BannerHome::where('id', $banner);
        $data = $request->validate([
            'title' => 'required|string|min:3|max:50',
            'text' => 'required|string|min:3|max:10',
            'price' => 'required|integer|max:100000',
            'url' => 'required|max:100'
        ]);

        $banner->update($data);
        return redirect('/admin');
    }

    public function delete(){

    }
}
