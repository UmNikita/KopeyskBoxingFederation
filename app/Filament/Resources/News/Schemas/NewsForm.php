<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Название')->required(),
                FileUpload::make('img_root')->label('Изображение')->disk('public')->image()->imageEditor()->directory('form-news'),
                RichEditor::make('content')->label('Контент')
                ->extraAttributes(['style' => 'min-height: 250px'])->required()
            ])->columns(1);
    }
}
