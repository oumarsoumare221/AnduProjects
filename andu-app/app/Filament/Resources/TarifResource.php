<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TarifResource\Pages;
use App\Models\Tarif;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class TarifResource extends Resource
{
    protected static ?string $model = Tarif::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('type')
                    ->required()
                    ->label('Type'),
                TextInput::make('price')
                    ->required()
                    ->label('Prix'),
                Textarea::make('description')
                    ->label('Description'),
                Textarea::make('advantage')
                    ->label('Avantage'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type')->label('Type'),
                TextColumn::make('price')->label('Prix'),
                TextColumn::make('description')->label('Description'),
                TextColumn::make('advantage')->label('Avantage'),
                TextColumn::make('created_at')->label('Créé le')
                    ->dateTime(),
                TextColumn::make('updated_at')->label('Mis à jour le')
                    ->dateTime(),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTarifs::route('/'),
            'create' => Pages\CreateTarif::route('/create'),
            'edit' => Pages\EditTarif::route('/{record}/edit'),
        ];
    }
}
