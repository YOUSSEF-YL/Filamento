<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Review;
use App\Models\Payment;
use Illuminate\Container\Attributes\Database;
use Illuminate\Support\Facades\DB;


class TopCourseChart extends ChartWidget
{
    protected static ?string $heading = 'Top Sellering courses';
    protected static ?int $sort = 3;
    protected function getData(): array
    {

       $paymentCounts = Payment::select(DB::raw('COUNT(id) as payment_count'))
    ->groupBy('course_id')
    ->orderByDesc('payment_count')
    ->limit(7)
    ->pluck('payment_count');



    $courseTitles = \App\Models\Payment::join('courses', 'payments.course_id', '=', 'courses.id')
    ->select('courses.title', DB::raw('COUNT(payments.id) as payment_count'))
    ->groupBy('payments.course_id', 'courses.title')
    ->orderByDesc('payment_count')
    ->limit(7)
    ->pluck('courses.title');


        return [

            'datasets' => [
                [
                    'label' => ' Top Sellering',
                    'data' => [
                        $paymentCounts[0],
                        $paymentCounts[1],
                        $paymentCounts[2],
                        $paymentCounts[3],
                        $paymentCounts[4],
                        $paymentCounts[5],
                        $paymentCounts[6],


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
            'labels' => [
                $courseTitles[0],
                $courseTitles[1],
                $courseTitles[2],
                $courseTitles[3],
                $courseTitles[4],
                $courseTitles[5],
                $courseTitles[6],
                 ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
