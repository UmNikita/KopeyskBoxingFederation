<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class CoachTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);
        Livewire::test(\App\Filament\Resources\Coaches\Pages\CreateCoach::class)
        ->fillForm([
            'name' => 'test',
            'secondname' => 'test',
            'thirstname' => 'test',
            'description' => 'test',
            'birthday' => '01.01.2000',
            'expirience' => '5',
            'avatar_root' => UploadedFile::fake()->image('test.png')
        ])->call('create')
        ->assertHasNoFormErrors();

        $this->assertDatabaseHas('coaches', [
            'name' => 'test'
        ]);
    }
}
