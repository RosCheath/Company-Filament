<?php

namespace App\Filament\Resources\ShopContactResource\Pages;

use App\Filament\Resources\ShopContactResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShopContacts extends ListRecords
{
    protected static string $resource = ShopContactResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
