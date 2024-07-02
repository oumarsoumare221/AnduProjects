<?php

namespace App\Filament\Resources\BufferTimelineResource\Pages;

use App\Filament\Resources\BufferTimelineResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBufferTimeline extends EditRecord
{
    protected static string $resource = BufferTimelineResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
