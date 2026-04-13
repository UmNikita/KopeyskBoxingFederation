<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
     use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);
        Livewire::test(\App\Filament\Resources\Contacts\Pages\CreateContact::class)
        ->fillForm([
            'name' => 'Test',
            'email' => 'test',
            'phone' => '80000000'
        ])->call('create')
        ->assertHasNoFormErrors();

        $this->assertDatabaseHas('contacts', [
            'name' => 'Test'
        ]);
    }
}
