<?php

namespace App\Filament\Resources\FeedResource\Widgets;

use App\Models\Feed;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class FeedOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Feed', Feed::all()->count()),
            Card::make('Public', Feed::all()->where('is_public', '=', '1')->count()),
            Card::make('Un-Public', Feed::all()->where('is_public', '=', '0')->count()),
        ];
    }
}
