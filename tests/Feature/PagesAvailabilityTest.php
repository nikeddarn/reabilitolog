<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Exceptions\Handler;
use Illuminate\Contracts\Debug\ExceptionHandler;

class PagesAvailabilityTest extends TestCase
{

    public function testMainPageAvailable()
    {
        $this->get('/')->assertStatus(200);
    }

    public function testRehabilitationPageAvailable()
    {
        $this->get('/rehabilitation')->assertStatus(200);
    }

    public function testPricePageAvailable()
    {
        $this->get('/price')->assertStatus(200);
    }

    public function testMassageBackPageAvailable()
    {
        $this->get('/massage/back')->assertStatus(200);
    }

    public function testMassageInsultPageAvailable()
    {
        $this->get('/massage/insult')->assertStatus(200);
    }

    public function testMassageCommonPageAvailable()
    {
        $this->get('/massage/common')->assertStatus(200);
    }

    public function testArticlesAutoMassagePageAvailable()
    {
        $this->get('/articles/auto_massage')->assertStatus(200);
    }

    public function testOrderPageAvailable()
    {
        $this->get('/order')->assertStatus(200);
    }

    public function testAboutPageAvailable()
    {
        $this->get('/about')->assertStatus(200);
    }

    public function testArticlesResourcesPageAvailable()
    {
        $this->get('/articles/resources')->assertStatus(200);
    }

    public function testArticlesRestPageAvailable()
    {
        $this->get('/articles/rest')->assertStatus(200);
    }

    public function testArticlesOsteochondrosisPageAvailable()
    {
        $this->get('/articles/osteochondrosis')->assertStatus(200);
    }

    public function testBooksPageAvailable()
    {
        $this->get('/books')->assertStatus(200);
    }

    public function testMusicPageAvailable()
    {
        $this->get('/music')->assertStatus(200);
    }

    public function testContactPageAvailable()
    {
        $this->get('/contact')->assertStatus(200);
    }

    public function testArticlesPageAvailable()
    {
        $this->get('/articles')->assertStatus(200);
    }

    public function testSuccessPageAvailable()
    {
        $this->get('/success')->assertStatus(200);
    }


    protected function disableExceptionHandling()
    {
        $this->app->instance(ExceptionHandler::class, new class extends Handler {
            public function __construct() {}

            public function report(\Exception $e)
            {
                // no-op
            }

            public function render($request, \Exception $e) {
                throw $e;
            }
        });
    }
}
