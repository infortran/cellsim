<?php

namespace Tests\Feature;

use App\Models\Social;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SocialsCRUDTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_socials_can_be_retrieved_by_admin()
    {
        $this->withoutExceptionHandling();

        Social::factory()->count(5)->create();
        $response = $this->get('admin/socials');

        $response->assertOk();
        $socials = Social::all();
        $response->assertViewIs('admin.socials.index');
        $response->assertViewHas('socials', $socials);
    }


    /** @test */
    public function a_social_can_be_created()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/admin/socials', [
            'name' => 'Facebook',
            'url' => 'http://facebook.com/',
            'uri' => 'infortran.chile',
        ]);

        $this->assertCount(1, Social::all());

        $social = Social::first();

        $this->assertEquals($social->name, 'Facebook');
        $this->assertEquals($social->url, 'http://facebook.com/');
        $this->assertEquals($social->uri, 'infortran.chile');

        $response->assertRedirect('/admin/socials');
    }

    /** @test */
    public function a_social_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $social = Social::factory()->create();

        $response = $this->put('/admin/socials/' . $social->id, [
            'name' => 'Facebook',
            'url' => 'http://facebook.com/',
            'uri' => 'infortran.chile',
        ]);

        $this->assertCount(1, Social::all());

        $social = $social->fresh();

        $this->assertEquals($social->name, 'Facebook');
        $this->assertEquals($social->url, 'http://facebook.com/');
        $this->assertEquals($social->uri, 'infortran.chile');

        $response->assertRedirect('/admin/socials');
    }

    /** @test */
    public function a_social_can_be_deleted()
    {
        $this->withoutExceptionHandling();

        $social = Social::factory()->create();

        $response = $this->delete('/admin/socials/'. $social->id);

        $this->assertCount(0, Social::all());

        $response->assertRedirect('admin/socials/');
    }
}
