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
                    ->pause(2000) // Ensure dashboard is fully loaded
                    // Use the mobile navigation for simplicity
                    ->resize(375, 812)
                    ->click('div.sm\:hidden button') // Click hamburger menu button
                    ->pause(1000) // Wait for mobile menu to appear
                    // Find the logout link in the responsive menu
                    ->clickLink('Log Out')
                    ->pause(1000) // Wait for logout to complete
                    ->assertPathIs('/');
        });
    }
}
