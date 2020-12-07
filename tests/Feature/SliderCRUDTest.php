<?php

namespace Tests\Feature;

use App\Models\Slider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SliderCRUDTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function list_of_sliders_can_be_retrieved_by_admin(){

        $this->withoutExceptionHandling();
        Slider::factory()->count(5)->create();
        $response = $this->get('admin/sliders');

        $response->assertOk();
        $sliders = Slider::all();
        $response->assertViewIs('admin.sliders.index');
        $response->assertViewHas('sliders', $sliders);
    }


    /** @test */
    public function a_slider_can_be_created()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/admin/sliders', [
            'title' => 'Slider',
            'subtitle' => 'Some slider text',
            'text' => 'from',
            'img' => 'img.png',
            'producto_id' => 1
        ]);

        //$response->assertOk();
        $this->assertCount(1, Slider::all());

        $slider = Slider::first();

        $this->assertEquals($slider->title, 'Slider');
        $this->assertEquals($slider->subtitle, 'Some slider text');
        $this->assertEquals($slider->text, 'from');
        $this->assertEquals($slider->img, 'img.png');

        $response->assertRedirect('/admin/sliders');
    }

    /** @test */
    public function a_slider_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $slider = Slider::factory()->create();

        $response = $this->put('/admin/sliders/' . $slider->id, [
            'title' => 'Slider',
            'subtitle' => 'Some slider text',
            'text' => 'from',
            'img' => 'img.png',
            'producto_id' => 1
        ]);


        $this->assertCount(1, Slider::all());

        $slider = $slider->fresh();

        $this->assertEquals($slider->title, 'Slider');
        $this->assertEquals($slider->subtitle, 'Some slider text');
        $this->assertEquals($slider->text, 'from');
        $this->assertEquals($slider->img, 'img.png');

        $response->assertRedirect('/admin/sliders');
    }

    /** @test */
    public function a_slider_can_be_deleted()
    {
        $this->withoutExceptionHandling();

        $slider = Slider::factory()->create();

        $response = $this->delete('/admin/sliders/'. $slider->id);

        $this->assertCount(0, Slider::all());

        $response->assertRedirect('admin/sliders/');
    }
}
