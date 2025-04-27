<?php

namespace App\Filament\Admin\Resources\TerbitPanganResource\Pages;

use App\Filament\Admin\Resources\TerbitPanganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTerbitPangans extends ListRecords
{
    protected static string $resource = TerbitPanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
