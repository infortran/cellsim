<?php

namespace App;

use Illuminate\Support\Facades\File;

class Tools{


    public static function processImage($image, $imageName, $path, $fit, $resolutions){
        for ($i = 0; $i < count($resolutions); $i++){
            if($fit){
                $image->fit($resolutions[$i][0],$resolutions[$i][1], function($constraint) {
                    $constraint->upsize();
                })->save(public_path($path).'/'.$resolutions[$i][0].'x'.$resolutions[$i][1].'/'. $imageName);
            }else{
                $image->resize($resolutions[$i][0],$resolutions[$i][1], function($constraint) {
                    $constraint->upsize();
                })->save(public_path($path).'/'.$resolutions[$i][0].'x'.$resolutions[$i][1].'/'. $imageName);
            }
        }
    }

    public static function deleteImage($imgName, $path, $resolutions){
        //$resolutions = [[1000, 1000],[600,600], [300,300], [150,150], [72,72]];
        for($i = 0; $i < count($resolutions); $i++){
            $img_delete = $path .'/'. $resolutions[$i][0].'x'.$resolutions[$i][1].'/'.$imgName;
            if(File::exists(public_path($img_delete))) {
                File::delete(public_path($img_delete));
            }
        }
    }
}