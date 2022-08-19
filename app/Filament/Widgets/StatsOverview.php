<?php

namespace App\Filament\Widgets;

use App\Models\Feed;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Feed', Feed::all()->count())
                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->icon('heroicon-o-rss')
                ->color('success'),
            Card::make('All User', User::all()->count())
                ->description('7% increase')
                ->descriptionIcon('heroicon-s-trending-down')
                ->icon('heroicon-o-users')
                ->color('danger'),

        ];
    }
}
