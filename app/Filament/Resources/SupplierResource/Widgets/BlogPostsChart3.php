<?php

namespace App\Filament\Resources\SupplierResource\Widgets;

use Filament\Widgets\ChartWidget;

class BlogPostsChart3 extends ChartWidget
{
    protected static ?string $heading = 'Recomendaciones dadas';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Recomendaciones',
                    'data' => [74, 77, 65, 45, 45, 32, 45, 32, 21, 21, 10, 5, 10, 5, 2],
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
