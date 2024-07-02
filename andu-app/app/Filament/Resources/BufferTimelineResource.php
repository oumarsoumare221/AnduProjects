<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BufferTimelineResource\Pages;
use App\Models\BufferTimeline;
use App\Models\History;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\HasManyRepeater;

class BufferTimelineResource extends Resource
{
    protected static ?string $model = BufferTimeline::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('year')
                    ->required()
                    ->numeric(),
                // HasManyRepeater::make('histories')
                //     ->relationship('histories')
                    // ->columns([
                    //     TextInput::make('month')->required()->hidden(),
                    //     TextInput::make('event')->required()->hidden(),
                    // ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('year')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
                TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBufferTimelines::route('/'),
            'create' => Pages\CreateBufferTimeline::route('/create'),
            'edit' => Pages\EditBufferTimeline::route('/{record}/edit'),
        ];
    }
}
