<?php

namespace App\Filament\Admin\Resources\CategorySahamResource\Pages;

use App\Filament\Admin\Resources\CategorySahamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategorySahams extends ListRecords
{
    protected static string $resource = CategorySahamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
