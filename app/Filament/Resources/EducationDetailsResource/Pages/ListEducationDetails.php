<?php

namespace App\Filament\Resources\EducationDetailsResource\Pages;

use App\Filament\Resources\EducationDetailsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEducationDetails extends ListRecords
{
    protected static string $resource = EducationDetailsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
