<?php

namespace App;

class Tools{
    public static function processImage($image, $imageName){
        $image->fit(800,600, function($constraint) {
            $constraint->upsize();
        })->save(public_path('uploads/productos/800x600').'/'. $imageName);

        $image->fit(300,300, function($constraint) {
            $constraint->upsize();
        })->save(public_path('uploads/productos/300x300').'/'. $imageName);

        $image->fit(150,150, function($constraint) {
            $constraint->upsize();
        })->save(public_path('uploads/productos/150x150').'/'. $imageName);

        $image->fit(72,72, function($constraint) {
            $constraint->upsize();
        })->save(public_path('uploads/productos/72x72').'/'. $imageName);
    }
}