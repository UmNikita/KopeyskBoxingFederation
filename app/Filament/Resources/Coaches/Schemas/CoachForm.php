<?php

namespace App\Filament\Resources\Coaches\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CoachForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Имя')->required(),
                TextInput::make('secondname')->label('Фамилия')->required(),
                TextInput::make('thirstname')->label('Отчество')->required(),
                Textarea::make('description')->label('Описание')->required(),
                DatePicker::make('birthday')->label('Дата рождения')->required(),
                TextInput::make('expirience')->integer()->label('Стаж')->required(),
                FileUpload::make('avatar_root')->label('Аватар')->disk('public')->image()->imageEditor()->directory('form-coaches')
            ]);
    }
}
