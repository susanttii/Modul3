<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HapusNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group HapusNotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'admin@gmail.com')
                    ->type('password', '12345678')
                    ->press('LOG IN')
                    ->clickLink(link: 'Notes')
                    ->assertPathIs('/notes')
                    ->press(button: 'Delete');
        });
    }
}
