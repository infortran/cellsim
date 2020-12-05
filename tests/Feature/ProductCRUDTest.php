<?php

namespace Tests\Feature;

use App\Models\Producto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductCRUDTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function list_of_products_can_be_retrieved(){

        $this->withoutExceptionHandling();
        Producto::factory()->count(5)->create();
        $response = $this->get('/productos');

        $response->assertOk();
        $productos = Producto::all();
        $response->assertViewIs('shop.main-shop');
        $response->assertViewHas('productos', $productos);
    }

    /** @test */
    public function a_product_can_be_retrieved(){
        $this->withoutExceptionHandling();

        $producto = Producto::factory()->create();

        $response = $this->get('/productos/' . $producto->id);

        $response->assertOk();
        $producto = Producto::first();
        $response->assertViewIs('single.single');
        $response->assertViewHas('producto', $producto);
    }

    /** @test */
    public function a_product_can_be_created(){
        $this->withoutExceptionHandling();

        $response = $this->post('/admin/productos', [
            'name' => 'Product 1',
            'stock' => 0,
            'description' => 'Product description',
            'price' => 1000,
            'oldprice' => 2000,
            'category_id' => null,
            'brand_id' => null,
            'enabled' => true
        ]);

        //$response->assertOk();
        $this->assertCount(1, Producto::all());

        $product = Producto::first();

        $this->assertEquals($product->name, 'Product 1');

        $response->assertRedirect('/productos/' . $product->id);
    }

    /** @test */
    public function a_product_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $producto = Producto::factory()->create();

        $response = $this->put('/admin/productos/'.$producto->id, [
            'name' => 'Product 1',
            'stock' => 0,
            'description' => 'Product description',
            'price' => 1000,
            'oldprice' => 2000,
            'category_id' => null,
            'brand_id' => null,
            'enabled' => true
        ]);

        //$response->assertOk();
        $this->assertCount(1, Producto::all());

        $producto = $producto->fresh();

        $this->assertEquals($producto->name, 'Product 1');

        $response->assertRedirect('admin/productos/');
    }

    /** @test */
    public function a_product_can_be_deleted()
    {
        $this->withoutExceptionHandling();

        $producto = Producto::factory()->create();

        $response = $this->delete('/admin/productos/'.$producto->id);

        $this->assertCount(0, Producto::all());

        $response->assertRedirect('admin/productos/');
    }
}
