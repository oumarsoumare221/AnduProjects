<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DynamicContentResource\Pages;
use App\Filament\Resources\DynamicContentResource\RelationManagers;
use App\Models\DynamicContent;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

use Filament\Forms\Components\TextInput;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Forms\Components\Textarea;

class DynamicContentResource extends Resource
{
    protected static ?string $model = DynamicContent::class;


    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Title')->rules('required'),
                Textarea::make('content')->label('Content'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->label('Title')
                ->sortable()
                    ->searchable(),

                TextColumn::make('content')
                ->label('Content')
                ->sortable()
                    ->searchable(),
            ])
            ->filters([
                // Ajoutez des filtres si nécessaire
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Définissez les relations si nécessaire
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDynamicContents::route('/'),
            'create' => Pages\CreateDynamicContent::route('/create'),
            'edit' => Pages\EditDynamicContent::route('/{record}/edit'),
        ];
    }

}
