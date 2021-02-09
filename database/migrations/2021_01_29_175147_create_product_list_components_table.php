<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductListComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_list_components', function (Blueprint $table) {
            $table->id();
            $table->integer('categoria_id')->unsigned();
            $table->string('title_section');
            $table->string('title_banner');
            $table->string('subtitle_banner');
            $table->integer('price_banner');
            $table->string('img_banner');
            $table->integer('max_products');
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
        Schema::dropIfExists('product_list_components');
    }
}
