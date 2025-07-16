<?php

namespace App\Filament\Penulis\Resources\CategoryBeritaResource\Pages;

use App\Filament\Penulis\Resources\CategoryBeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryBeritas extends ListRecords
{
    protected static string $resource = CategoryBeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
