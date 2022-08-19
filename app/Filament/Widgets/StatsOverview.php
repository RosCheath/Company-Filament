<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use App\Models\Feed;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Feed', Feed::all()->count())
                ->description('Total your company post content')
                ->icon('heroicon-o-rss'),
            Card::make('All Employees', Employee::all()->count())
                ->description('Total Employee in your company')
                ->icon('heroicon-o-users'),

        ];
    }
}
