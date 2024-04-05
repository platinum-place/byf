<?php

namespace App\Filament\Resources\CustomerResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Estudiantes pendientes', '19'),
            Stat::make('Rango de aprobaciones', '21%'),
            Stat::make('Estudiantes propensos a fallos', '3'),
        ];
    }
}
