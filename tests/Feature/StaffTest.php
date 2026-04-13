<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Livewire\Livewire;
use Tests\TestCase;

class StaffTest extends TestCase
{
     use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);
        Livewire::test(\App\Filament\Resources\Staff\Pages\CreateStaff::class)
        ->fillForm([
            'name' => 'Test',
            'secondname' => 'test',
            'thirstname' => 'test',
            'phone' => 'test',
            'position' => 'test',
            'avatar_root' => UploadedFile::fake()->image('test.png')
        ])->call('create')
        ->assertHasNoFormErrors();

        $this->assertDatabaseHas('staff', [
            'name' => 'Test'
        ]);
    }
}
