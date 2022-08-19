<?php

namespace App\Filament\Resources\FeedResource\Pages;

use App\Filament\Resources\FeedResource;
use Filament\Pages\Actions;
use Filament\Pages\Actions\ActionGroup;
use Filament\Resources\Pages\EditRecord;

class EditFeed extends EditRecord
{
    protected static string $resource = FeedResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            ActionGroup::make([
                Actions\ForceDeleteAction::make(),
                Actions\RestoreAction::make(),
            ]),
        ];
    }
}
