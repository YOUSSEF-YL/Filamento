<?php

namespace App\Filament\Widgets;

use App\Models\Course;
use Filament\Widgets\ChartWidget;
use App\Models\Review;

class reviewChart extends ChartWidget
{
    protected static ?string $heading = 'ReviewsChart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Reviews',
                    'data' => [
                        Review::where('rating', '1')->count()
                        ,
                        Review::where('rating', '2')->count()
                        ,
                        Review::where('rating', '3')->count()
                        ,
                        Review::where('rating', '4')->count()
                        ,
                        Review::where('rating', '5')->count()
                    ],
                    'backgroundColor' => [
                        'rgb(191, 236, 255)',
                       ' rgb(205, 193, 255)',
                       'rgb(255, 246, 227)',
                       ' rgb(255, 204, 234)',
                       'rgb(54, 48, 98)'
                      ],

                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => ['1 stars', '2 stars','3 stars', '4 stars','5 stars' ],
        ];
    }

    protected function getType(): string
    {
        return 'polarArea';
    }
}
