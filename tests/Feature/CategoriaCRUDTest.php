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
    public function list_of_categories_can_be_retrieved_on_index(){

        $this->withoutExceptionHandling();


        Categoria::factory()->count(5)->create();
        $response = $this->get('/');

        $response->assertOk();
        $categorias = Categoria::all();
        $response->assertViewIs('home.template');
        $response->assertViewHas('categorias', $categorias);
    }


    /** @test */
    public function list_of_categories_can_be_retrieved_by_admin(){

        $this->withoutExceptionHandling();
        Categoria::factory()->count(5)->create();
        $response = $this->get('/admin/categorias');

        $response->assertOk();
        $categorias = Categoria::all();
        $response->assertViewIs('admin.categorias.index');
        $response->assertViewHas('categorias', $categorias);
    }


    /** @test */
    public function a_category_can_be_created()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/admin/categorias', [
            'name' => 'category 1',
            'text' => 'This is a category',
        ]);

        //$response->assertOk();
        $this->assertCount(1, Categoria::all());

        $categoria = Categoria::first();

        $this->assertEquals($categoria->name, 'category 1');
        $this->assertEquals($categoria->text, 'This is a category');

        $response->assertRedirect('/admin/categorias');
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

        $response->assertRedirect('/admin/categorias');
    }

    /** @test */
    public function a_category_can_be_deleted()
    {
        $this->withoutExceptionHandling();

        $categoria = Categoria::factory()->create();

        $response = $this->delete('/admin/categorias/'.$categoria->id);

        $this->assertCount(0, Categoria::all());

        $response->assertRedirect('/admin/categorias');
    }
}
