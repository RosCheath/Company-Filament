<?php

namespace App\Filament\Resources\AboutUsResource\Pages;

use App\Filament\Resources\AboutUsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutUs extends ListRecords
{
    protected static string $resource = AboutUsResource::class;

    protected function getActions(): array
    {
        return [
            //            Actions\CreateAction::make(),
        ];
    }
}
