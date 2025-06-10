<?php

namespace App\Filament\Admin\Resources\CategoryBeritaResource\Pages;

use App\Filament\Admin\Resources\CategoryBeritaResource;
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
