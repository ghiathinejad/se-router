<?php

namespace Tests\Feature;

use App\Http\Controllers\UserController;
use Tests\TestCase;
class SampleTest extends TestCase
{
    public function testUserControllerExist()
    {
        new \ReflectionClass(UserController::class);
        self::assertTrue(true);
    }

    public function testHomePage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Bello!');
    }

    public function testPostSlugEmpty()
    {
        $response = $this->get('/post');
        $response->assertStatus(200);
    }

    public function testPostValidSlug()
    {
        $response = $this->get('/post/quera-software-engineering-2022');
        $response->assertStatus(200);
    }

    public function testPostInvalidSlug1()
    {
        $response = $this->get('/post/quera_software-2022');
        $response->assertStatus(404);
    }

    public function testAdminDashboardMiddlewareInvalidHeader()
    {
        $response = $this->get('/admin/dashboard');
        $response->assertStatus(401);
    }


    public function testAdminDashboardMiddlewareValidHeader()
    {
        $response = $this->get('/admin/dashboard', ['is_admin' => 1]);
        $response->assertStatus(200);
    }

    public function testFallback()
    {
        $response = $this->get('/not-found');
        $response->assertStatus(404);
        $response->assertViewIs('errors.404');
    }
}
