<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clicklink(link: 'Log in')
                    ->assertpathIs(path: '/login')
                    ->type(field: 'input[name="email"]', value: 'admin@gmail.com')
                    ->type(field: 'input[name="password"]', value: '12345678')
                    ->press(button: 'LOG IN')
                    ->assertPathIs('/dashboard')
                    ->resize(375, 812)
                    ->click('div.sm\:hidden button') 
                    ->clickLink('Log Out')
                    ->assertPathIs('/');
        });
    }
}
