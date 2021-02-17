<?php

namespace App;

use Illuminate\Support\Facades\File;

class Tools{


    public static function processImage($image, $imageName, $path, $fit, $resolutions){
        for ($i = 0; $i < count($resolutions); $i++){
            $carpeta = public_path($path).'/'.$resolutions[$i][0].'X'.$resolutions[$i][1];
            if(! File::exists($carpeta)){
                File::makeDirectory($carpeta, $mode = 0777, true, true);
            }
            if($fit){
                $image->fit($resolutions[$i][0],$resolutions[$i][1], function($constraint) {
                    $constraint->upsize();
                })->save($carpeta.'/'. $imageName);
            }else{
                $image->resize($resolutions[$i][0],$resolutions[$i][1], function($constraint) {
                    $constraint->upsize();
                })->save($carpeta.'/'. $imageName);
            }
        }
    }

    public static function deleteImage($imgName, $path, $resolutions){
        for($i = 0; $i < count($resolutions); $i++){
            $img_delete = $path .'/'. $resolutions[$i][0].'X'.$resolutions[$i][1].'/'.$imgName;
            if(File::exists(public_path($img_delete))) {
                File::delete(public_path($img_delete));
            }
        }
    }
}