<?php

namespace App\Filament\Penulis\Widgets;

use App\Models\Berita;
use Illuminate\Support\Facades\Auth;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class PenulisCount extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Card::make('Total Berita', function (): int {
                return Berita::where('user_id', Auth::id())->count();
            })
            ->description('berita dibuat')
            ->color('primary'),
        ];
    }
}
