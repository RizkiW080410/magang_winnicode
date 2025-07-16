<?php

namespace App\Filament\Admin\Widgets;

use App\Models\User;
use App\Models\Berita;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class AdminCount extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Card::make('Total Berita', fn (): int => Berita::count())
                ->description('semua penulis')
                ->color('primary'),
                
            Card::make('Total Pengunjung', fn (): int => User::role('Pengunjung')->count())
                ->description('Pengunjung terdaftar')
                ->color('success'),
        ];
    }
}
