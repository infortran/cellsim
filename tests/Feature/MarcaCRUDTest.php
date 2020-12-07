<?php

namespace Tests\Feature;

use App\Models\Marca;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MarcaCRUDTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function list_of_brands_can_be_retrieved_by_admin(){

        $this->withoutExceptionHandling();
        Marca::factory()->count(5)->create();
        $response = $this->get('admin/marcas');

        $response->assertOk();
        $marcas = Marca::all();
        $response->assertViewIs('admin.marcas.index');
        $response->assertViewHas('marcas', $marcas);
    }


    /** @test */
    public function a_brand_can_be_created()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/admin/marcas', [
            'name' => 'brand 1',
            'text' => 'Some brand text',
            'img' => 'img.png'
        ]);

        //$response->assertOk();
        $this->assertCount(1, Marca::all());

        $marca = Marca::first();

        $this->assertEquals($marca->name, 'brand 1');
        $this->assertEquals($marca->text, 'Some brand text');
        $this->assertEquals($marca->img, 'img.png');

        $response->assertRedirect('/admin/marcas');
    }

    /** @test */
    public function a_brand_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $marca = Marca::factory()->create();

        $response = $this->put('/admin/marcas/'.$marca->id, [
            'name' => 'brand 1',
            'text' => 'Some brand text',
            'img' => 'img.png'

        ]);


        $this->assertCount(1, Marca::all());

        $marca= $marca->fresh();

        $this->assertEquals($marca->name, 'brand 1');
        $this->assertEquals($marca->text, 'Some brand text');
        $this->assertEquals($marca->img, 'img.png');

        $response->assertRedirect('/admin/marcas');
    }

    /** @test */
    public function a_brand_can_be_deleted()
    {
        $this->withoutExceptionHandling();

        $marca = Marca::factory()->create();

        $response = $this->delete('/admin/marcas/'. $marca->id);

        $this->assertCount(0, Marca::all());

        $response->assertRedirect('admin/marcas/');
    }
}
