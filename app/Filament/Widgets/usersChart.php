<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use Filament\Widgets\ChartWidget;

class usersChart extends ChartWidget
{
    protected static ?string $heading = 'Successful & Unsuccessful Payments ';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'payments',
                    'data' => [
                        Payment::where('status', 'paid')->count()
                        ,
                        Payment::where('status', 'failed')->count()
                    ],
                    'backgroundColor' => [
                        'rgb(54, 48, 98)',
                        'rgb(216, 185, 195)'
                      ],

                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => ['Paid', 'Unpaid', ],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
