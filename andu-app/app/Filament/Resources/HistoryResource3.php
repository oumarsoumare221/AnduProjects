<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryResource3\Pages;
use App\Models\History3;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class HistoryResource3 extends Resource
{
    protected static ?string $model = History3::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('buffer_timeline_id')
                    ->relationship('bufferTimeline', 'year')
                    ->required(),
                TextInput::make('month')->required(),
                TextInput::make('event')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('bufferTimeline.year')->label('Year')->sortable()->searchable(),
                TextColumn::make('month')->sortable()->searchable(),
                TextColumn::make('event')->sortable()->searchable(),
            ])
            ->filters([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHistory3::route('/'),
            'create' => Pages\CreateHistory3::route('/create'),
            'edit' => Pages\EditHistory3::route('/{record}/edit'),
        ];
    }
}
