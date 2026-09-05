<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('headline'),
                Textarea::make('bio')
                    ->columnSpanFull(),
                TextInput::make('avatar'),
                Textarea::make('social_links')
                    ->columnSpanFull(),
            ]);
    }
}
