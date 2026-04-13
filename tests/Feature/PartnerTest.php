<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Livewire\Livewire;
use Tests\TestCase;

class PartnerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);
        Livewire::test(\App\Filament\Resources\Partners\Pages\CreatePartner::class)
        ->fillForm([
            'name' => 'Test partner',
            'url' => '/test',
            'avatar_root' => UploadedFile::fake()->image('test.png')
        ])->call('create')
        ->assertHasNoFormErrors();

        $this->assertDatabaseHas('partners', [
            'name' => 'Test partner'
        ]);
    }
}
