<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LihatNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group LihatNotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type(field: 'email', value: 'admin@gmail.com')
                    ->type(field: 'password', value: '12345678')
                    ->press('LOG IN')
                    ->pause(1000)
                    ->clickLink('Notes')
                    ->waitForText('Create Note')
                    ->assertPathIs('/notes')
                    ->assertSee('Create Note')
                    ->clickLink('Create Note')
                    ->waitForText('Title')
                    ->assertPathIs('/create-note')
                    ->type('title', 'tugas')
                    ->type('description', 'mengerjakan tugas')
                    ->press('.btn-submit-note');
        });
    }
}    
