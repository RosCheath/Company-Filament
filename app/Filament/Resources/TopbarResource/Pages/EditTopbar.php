<?php

namespace App\Filament\Resources\TopbarResource\Pages;

use App\Filament\Resources\TopbarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopbar extends EditRecord
{
    protected static string $resource = TopbarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
