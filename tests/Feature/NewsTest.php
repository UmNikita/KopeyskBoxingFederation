<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class NewsTest extends TestCase
{
     use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);
        Livewire::test(\App\Filament\Resources\News\Pages\CreateNews::class)
        ->fillForm([
            'name' => 'Test new',
            'content' => 'test',
            'img_root' => UploadedFile::fake()->image('test.png')
        ])->call('create')
        ->assertHasNoFormErrors();

        $this->assertDatabaseHas('news', [
            'name' => 'Test new'
        ]);
    }
}
