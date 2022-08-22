<?php

namespace App\Filament\Resources\AboutTeamResource\Pages;

use App\Filament\Resources\AboutTeamResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutTeams extends ListRecords
{
    protected static string $resource = AboutTeamResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
