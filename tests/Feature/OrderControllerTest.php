<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OrderControllerTest extends TestCase
{
//    use DatabaseMigrations;

    public function IncomingOrderDataProvider()
    {
        return [
            ['Joe Dow', '+380-67-409-16-65', 'pizda', '/success'],
            ['Joe Dow', '+380-67-409-16-65', '', '/success'],
            ['Joe Dow', '+380-67-409-16-65', null, '/success'],
            ['', '+380-67-409-16-65', null, '/order'],
            [null, '+380-67-409-16-65', null, '/order'],
            ['Joe Dow', '', null, '/order'],
            ['Joe Dow', null, null, '/order'],
        ];
    }

    /**
     * @dataProvider IncomingOrderDataProvider
     */
    public function testIncomingOrderData($name, $phone, $message, $expectedRedirect)
    {
        $this->withoutMiddleware();

        $post = ['name' => $name, 'phone' => $phone, 'message' => $message];
        $server = ['HTTP_REFERER' => '/order'];

        Mail::fake();

        $this->call('POST', '/order', $post, [], [], $server)->assertRedirect($expectedRedirect);
    }


    public function testIncomingDataStoredInDatabase()
    {
        $this->withoutMiddleware();

        $post = ['name' => 'Joe Dow', 'phone' => '+380-67-409-16-65', 'message' => 'store test'];

        $this->call('POST', '/order', $post);

        $this->assertDatabaseHas('orders', $post);
    }

}
