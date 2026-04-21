<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('company')
                    ->required(),
                TextInput::make('role')
                    ->required(),
                DatePicker::make('period_start')
                    ->required(),
                DatePicker::make('period_end'),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('tags')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('order')
                    ->required()
                    ->numeric(),
                Toggle::make('is_visible')
                    ->required(),
            ]);
    }
}
