<?php

namespace App\Filament\Widgets;

use App\Models\Course;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Payment;
use App\Models\User;

class StatsadminOverview extends BaseWidget
{

    protected function getStats(): array
    {

        return [
//Payment::where('status', 'paid')->sum('amount')
            Stat::make('Total Revenue', '$ '. number_format(  Payment::where('status', 'paid')->sum('amount'), 2) )
            ->description('')
            ->descriptionIcon('heroicon-m-arrow-trending-up')

            ->color('success'),

        Stat::make('Users Stats', User::all()->count())
            ->description('7% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger'),

        Stat::make('Tota courses', Course::distinct()->count())
            ->description('3% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),


        ];
    }
}

