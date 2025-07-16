<?php

namespace App\Filament\Penulis\Resources\CategoryBeritaResource\Pages;

use App\Filament\Penulis\Resources\CategoryBeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryBerita extends EditRecord
{
    protected static string $resource = CategoryBeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
