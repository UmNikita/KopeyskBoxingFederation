<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Имя')->required(),
                TextInput::make('url')->label('Ссылка на партнера')->required(),
                FileUpload::make('avatar_root')->label('Аватар')->disk('public')->image()->imageEditor()->directory('form-partners')
            ]);
    }
}
