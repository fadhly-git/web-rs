<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Berita;

class BeritaOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $latestBerita = Berita::query()->latest()->first();

        return [
            //
        ];
    }
}