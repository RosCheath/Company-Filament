<?php

namespace App\Filament\Resources\ShopContactResource\Pages;

use App\Filament\Resources\ShopContactResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShopContact extends EditRecord
{
    protected static string $resource = ShopContactResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
