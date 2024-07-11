<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CaseStudyResource\Pages;
use App\Filament\Resources\CaseStudyResource\RelationManagers;
use App\Models\CaseStudy;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Number; // Import de Number

class CaseStudyResource extends Resource
{
    protected static ?string $model = CaseStudy::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->label('Titre'),
                Textarea::make('description')
                    ->required()
                    ->label('Description'),
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('case-studies'),
                Textarea::make('details')
                    ->required()
                    ->label('Détails'),
                Forms\Components\TextInput::make('years_of_experience')
                ->label('Années d\'expérience')
                ->numeric()
                    ->minValue(1)
                    ->maxValue(100)
                    ->required(),

                Forms\Components\TextInput::make('users_using_lms')
                ->label('Utilisateurs qui ont utilisé LMS')
                ->numeric()
                    ->minValue(1)
                    ->maxValue(100)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Titre')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Description')
                    ->limit(50),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Créé le')
                    ->dateTime(),
            Tables\Columns\TextColumn::make('years_of_experience')
            ->label('Années d\'expérience'),
            Tables\Columns\TextColumn::make('users_using_lms')
                ->label('Utilisateurs LMS'),
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
            'index' => Pages\ListCaseStudies::route('/'),
            'create' => Pages\CreateCaseStudy::route('/create'),
            'edit' => Pages\EditCaseStudy::route('/{record}/edit'),
        ];
    }
}
