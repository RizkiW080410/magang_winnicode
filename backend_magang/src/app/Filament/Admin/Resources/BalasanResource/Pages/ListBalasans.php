<?php

namespace App\Filament\Admin\Resources\BalasanResource\Pages;

use App\Filament\Admin\Resources\BalasanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBalasans extends ListRecords
{
    protected static string $resource = BalasanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
