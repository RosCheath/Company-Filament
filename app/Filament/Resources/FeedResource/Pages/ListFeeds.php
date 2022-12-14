<?php

namespace App\Filament\Resources\FeedResource\Pages;

use App\Filament\Resources\FeedResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeeds extends ListRecords
{
    protected static string $resource = FeedResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            FeedResource\Widgets\FeedOverview::class,
        ];
    }
}
