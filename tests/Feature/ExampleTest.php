<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Welcome to Our Personal Profile Website')
            ->assertSee('<main id="main-content">', false);
    }

    public function test_profile_pages_render_with_the_shared_layout(): void
    {
        $pages = [
            '/home' => 'Welcome to Our Personal Profile Website',
            '/contact' => 'Contact Information',
            '/about/hazirah' => "Hello! I'm Hazirah",
            '/about/aliyah' => "Hello! I'm Aliyah Jannah",
            '/about/najwa' => "Hello! I'm Najwa",
            '/about/maneessa' => "Hello! I'm Maneessa A/P Chandrasekaran",
        ];

        foreach ($pages as $uri => $content) {
            $this->get($uri)
                ->assertOk()
                ->assertSee($content, false)
                ->assertSee('<main id="main-content">', false)
                ->assertSee('About Us')
                ->assertSee(route('about.hazirah'), false)
                ->assertSee(route('about.aliyah'), false)
                ->assertSee(route('about.najwa'), false)
                ->assertSee(route('about.maneessa'), false)
                ->assertSee('Contact');
        }

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('class="col-md-6"', false)
            ->assertSee('id="member-hazirah"', false)
            ->assertSee('id="member-najwa"', false)
            ->assertSee('id="member-aliyah"', false)
            ->assertSee('id="member-maneessa"', false);

        foreach (['hazirah', 'aliyah', 'najwa', 'maneessa'] as $member) {
            $this->get(route("about.{$member}"))
                ->assertOk()
                ->assertSee('class="card', false);
        }
    }
}
