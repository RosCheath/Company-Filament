<?php

namespace App\Filament\Resources\TopbarResource\Pages;

use App\Filament\Resources\TopbarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTopbars extends ListRecords
{
    protected static string $resource = TopbarResource::class;

    protected function getActions(): array
    {
        return [
            //            Actions\CreateAction::make(),
        ];
    }
}
