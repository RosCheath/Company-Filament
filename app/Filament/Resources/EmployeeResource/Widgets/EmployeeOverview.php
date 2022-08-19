<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeeOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Employee', Employee::all()->count()),
            Card::make('Male', Employee::all()->where('sex', '=', '0')->count()),
            Card::make('Female', Employee::all()->where('sex', '=', '1')->count()),
        ];
    }
}
