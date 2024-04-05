<?php

namespace App\Filament\Resources\ContactResource\Widgets;

use Filament\Widgets\ChartWidget;

class BlogPostsChart2 extends ChartWidget
{
    protected static ?string $heading = 'Estudiantes aprobados';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Estudiantes',
                    'data' => [89, 77, 74, 65, 45, 45, 32, 21, 10, 5, 2, 0],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
