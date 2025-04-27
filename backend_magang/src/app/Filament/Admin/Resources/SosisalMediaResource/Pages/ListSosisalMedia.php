<?php

namespace App\Filament\Admin\Resources\SosisalMediaResource\Pages;

use App\Filament\Admin\Resources\SosisalMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSosisalMedia extends ListRecords
{
    protected static string $resource = SosisalMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
