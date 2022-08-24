<?php

namespace App\Filament\Resources\ContactMessageResource\Pages;

use App\Filament\Resources\ContactMessageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactMessage extends EditRecord
{
    protected static string $resource = ContactMessageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
//            Actions\DeleteAction::make(),
        ];
    }
}
