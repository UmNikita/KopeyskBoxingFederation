<?php

namespace App\Filament\Resources\Staff\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StaffForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Имя')->required(),
                TextInput::make('secondname')->label('Фамилия')->required(),
                TextInput::make('thirstname')->label('Отчество')->required(),
                TextInput::make('position')->label('Должность')->required(),
                TextInput::make('phone')->label('Телефон'),
                FileUpload::make('avatar_root')->label('Аватар')->disk('public')->image()->imageEditor()->directory('form-staff')
            ]);
    }
}
