<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clicklink(link: 'Register')
                    ->assertpathIs(path: '/register')
                    ->type(field: 'name', value: 'susanti')
                    ->type(field: 'email', value: 'admin@gmail.com')
                    ->type(field: 'password', value: '12345678')
                    ->type(field: 'password_confirmation', value: '12345678')
                    ->press(button: 'REGISTER');
        });
    }
}
