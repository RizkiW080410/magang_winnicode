<?php

namespace App\Filament\Admin\Resources\PenulisResource\Pages;

use App\Filament\Admin\Resources\PenulisResource;
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
