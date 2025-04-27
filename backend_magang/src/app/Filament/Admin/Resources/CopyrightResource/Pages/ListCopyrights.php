<?php

namespace App\Filament\Admin\Resources\CopyrightResource\Pages;

use App\Filament\Admin\Resources\CopyrightResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCopyrights extends ListRecords
{
    protected static string $resource = CopyrightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
