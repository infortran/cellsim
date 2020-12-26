<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->integer('categoria_id')->unsigned()->default(0);
            $table->integer('marca_id')->unsigned()->default(0);
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->integer('oldprice')->nullable();
            $table->boolean('enabled')->default(false);
            $table->integer('stock')->default(0);
            $table->string('img')->default('image.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
