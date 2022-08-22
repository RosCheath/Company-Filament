<?php

namespace App\Filament\Resources\AboutTeamResource\Pages;

use App\Filament\Resources\AboutTeamResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutTeam extends EditRecord
{
    protected static string $resource = AboutTeamResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
