<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clicklink(link: 'Log in')
                    ->assertpathIs(path: '/login')
                    ->type(field: 'email', value: 'admin@gmail.com')
                    ->type(field: 'password', value: '12345678')
                    ->press(button: 'LOG IN');
        });
    }
}
