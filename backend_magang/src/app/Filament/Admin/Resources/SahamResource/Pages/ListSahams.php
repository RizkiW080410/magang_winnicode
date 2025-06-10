<?php

namespace App\Filament\Admin\Resources\SahamResource\Pages;

use App\Filament\Admin\Resources\SahamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSahams extends ListRecords
{
    protected static string $resource = SahamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
