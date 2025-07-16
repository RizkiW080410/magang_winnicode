<?php

namespace App\Filament\Penulis\Resources\PenulisResource\Pages;

use App\Filament\Penulis\Resources\PenulisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenulis extends EditRecord
{
    protected static string $resource = PenulisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
