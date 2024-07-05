<?php

namespace App\Filament\Resources\CaseStudyResource\Pages;

use App\Filament\Resources\CaseStudyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCaseStudy extends EditRecord
{
    protected static string $resource = CaseStudyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
