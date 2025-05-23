<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatistikDashboard;

class Dashboard extends BaseDashboard
{
    public static function getWidgets(): array
    {
        return [
            StatistikDashboard::class,
        ];
    }
}