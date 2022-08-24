<?php

namespace App\Filament\Resources\AppointmentResource\Pages;

use App\Filament\Resources\AppointmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAppointment extends EditRecord
{
    protected static string $resource = AppointmentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            //            Actions\DeleteAction::make(),
        ];
    }
}
