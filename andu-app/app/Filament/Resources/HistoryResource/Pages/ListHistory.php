<?php

namespace App\Filament\Resources\HistoryResource\Pages;

use App\Filament\Resources\HistoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHistory extends ListRecords
{
    protected static string $resource = HistoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
