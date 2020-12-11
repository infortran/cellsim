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
    public function list_of_products_can_be_retrieved_by_admin()
    {
        $this->withoutExceptionHandling();
        Producto::factory()->count(5)->create();
        $response = $this->get('/admin/productos');

        $response->assertOk();
        $productos = Producto::all();
        //dd($productos);
        $response->assertViewIs('admin.productos.index');
        $response->assertViewHas('productos', $productos);
    }

    /** @test */
    public function a_product_can_be_retrieved_by_admin()
    {
        $this->withoutExceptionHandling();

        $producto = Producto::factory()->create();
        //dd($producto);

        $response = $this->get('/admin/productos/' . $producto->id);

        $response->assertOk();
        $producto = Producto::first();
        //dd($producto);
        $response->assertViewIs('admin.productos.single');
        $response->assertViewHas('producto', $producto);
    }

    /** @test */
    public function a_product_can_be_created()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/admin/productos', [
            'name' => 'Product 1',
            'stock' => 1,
            'description' => 'Product description',
            'price' => 1000,
            'oldprice' => 2000,
            'category_id' => null,
            'brand_id' => null,
            'enabled' => false
        ]);

        $this->assertCount(1, Producto::all());

        $producto = Producto::first();

        $this->assertEquals($producto->name, 'Product 1');
        $this->assertEquals($producto->description, 'Product description');

        $response->assertRedirect('admin/productos/' . $producto->id);
    }

    /** @test */
    public function a_product_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $producto = Producto::factory()->create();

        $response = $this->put('admin/productos/'.$producto->id, [
            'name' => 'Product 1',
            'stock' => 0,
            'description' => 'Product description',
            'price' => 1000,
            'oldprice' => 2000,
            'category_id' => null,
            'brand_id' => null,
            'enabled' => true
        ]);

        $this->assertCount(1, Producto::all());

        $producto = $producto->fresh();

        $this->assertEquals($producto->name, 'Product 1');
        $this->assertEquals($producto->description, 'Product description');

        $response->assertRedirect('admin/productos/');
    }

    /** @test */
    public function a_product_can_be_deleted()
    {
        $this->withoutExceptionHandling();

        $producto = Producto::factory()->create();

        $response = $this->delete('admin/productos/'.$producto->id);

        $this->assertCount(0, Producto::all());

        $response->assertRedirect('/admin/productos/');
    }

    /** @test */
    public function list_of_products_can_be_retrieved_on_shop()
    {
        $this->withoutExceptionHandling();

        Producto::factory()->count(5)->create();

        $response = $this->get('/tienda');

        $response->assertOk();
        $productos = Producto::all();
        $response->assertViewIs('shop.main-shop');
        $response->assertViewHas('productos', $productos);
    }

    /** @test */
    public function a_product_can_be_retrieved_on_single()
    {
        $this->withoutExceptionHandling();

        $producto = Producto::factory()->create();

        $response = $this->get('/productos/' . $producto->id);

        $response->assertOk();
        $producto = Producto::first();
        $response->assertViewIs('single.single');
        $response->assertViewHas('producto', $producto);
    }
}
