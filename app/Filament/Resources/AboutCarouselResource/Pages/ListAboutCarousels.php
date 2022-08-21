<?php

namespace App\Filament\Resources\AboutCarouselResource\Pages;

use App\Filament\Resources\AboutCarouselResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutCarousels extends ListRecords
{
    protected static string $resource = AboutCarouselResource::class;

    protected function getActions(): array
    {
        return [
            //            Actions\CreateAction::make(),
        ];
    }
}
