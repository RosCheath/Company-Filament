<?php

namespace App\Filament\Resources\HomeCarouselResource\Pages;

use App\Filament\Resources\HomeCarouselResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeCarousel extends EditRecord
{
    protected static string $resource = HomeCarouselResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
