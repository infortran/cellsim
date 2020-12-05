<?php

namespace Tests\Feature;

use App\Models\Categoria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriaCRUDTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function list_of_categories_can_be_retrieved(){

        $this->withoutExceptionHandling();
        Categoria::factory()->count(5)->create();
        $response = $this->get('admin/productos');

        $response->assertOk();
        $categorias = Categoria::all();
        //$response->assertViewIs('');
        //$response->assertViewHas('categorias', $categorias);
    }

    /** @test */
    public function a_category_can_be_retrieved(){
        $this->withoutExceptionHandling();

        $categoria = Categoria::factory()->create();

        $response = $this->get('admin/categorias/' . $categoria->id);

        $response->assertOk();
        $categoria = Categoria::first();
        //$response->assertViewIs('single.single');
        //$response->assertViewHas('producto', $producto);
    }

    /** @test */
    public function a_category_can_be_created()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/admin/productos', [
            'name' => 'category 1',
            'text' => 'This is a category',
        ]);

        //$response->assertOk();
        $this->assertCount(1, Categoria::all());

        $categoria = Categoria::first();

        $this->assertEquals($categoria->name, 'category 1');
        $this->assertEquals($categoria->text, 'This is a category');

        $response->assertRedirect('admin/categorias/' . $categoria->id);
    }

    /** @test */
    public function a_category_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $categoria = Categoria::factory()->create();

        $response = $this->put('/admin/categorias/'.$categoria->id, [
            'name' => 'Cat 1',
            'text' => 'Update cat',

        ]);

        //$response->assertOk();
        $this->assertCount(1, Categoria::all());

        $categoria = $categoria->fresh();

        $this->assertEquals($categoria->name, 'Cat 1');
        $this->assertEquals($categoria->text, 'Update cat');

        $response->assertRedirect('admin/categorias/');
    }

    /** @test */
    public function a_category_can_be_deleted()
    {
        $this->withoutExceptionHandling();

        $categoria = Categoria::factory()->create();

        $response = $this->delete('/admin/categorias/'.$categoria->id);

        $this->assertCount(0, Categoria::all());

        $response->assertRedirect('admin/categorias/');
    }
}
