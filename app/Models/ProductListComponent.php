<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductListComponent extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }


}
