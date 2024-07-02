<?php

namespace App\Filament\Resources\BufferTimelineResource\Pages;

use App\Filament\Resources\BufferTimelineResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBufferTimelines extends ListRecords
{
    protected static string $resource = BufferTimelineResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
