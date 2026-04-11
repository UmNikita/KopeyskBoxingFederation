<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Имя')->required(),
                FileUpload::make('document_root')->label('Файл документа')->disk('public')->directory('form-documents')->required(),
                Select::make('document_type_id')
                ->label('Тип документа')
                ->relationship('documentType', 'name')
                ->required()
                ->searchable()
                ->preload()
            ]);
    }
}
