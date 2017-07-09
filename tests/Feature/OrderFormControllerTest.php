<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OrderFormControllerTest extends TestCase
{

    public function testViewHasFormData()
    {
        $this->get('/order')->assertViewHas('form');
    }

    public function testViewIs()
    {
        $this->get('/order')->assertViewIs('order.form');
    }
}
