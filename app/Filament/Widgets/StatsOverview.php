<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use App\Models\ContactMessage;
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
                ->icon('heroicon-o-user-group'),
            Card::make('All Contact', ContactMessage::all()->count())
                ->description('Total Contact in your company')
                ->icon('heroicon-o-chat-alt'),
            Card::make('All Appointment', Appointment::all()->count())
                ->description('Total Appointment in your company')
                ->icon('heroicon-o-chat-alt-2'),

        ];
    }
}
