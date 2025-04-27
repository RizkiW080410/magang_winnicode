<?php

namespace App\Filament\Admin\Resources\TerbitPanganResource\Pages;

use App\Filament\Admin\Resources\TerbitPanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTerbitPangan extends EditRecord
{
    protected static string $resource = TerbitPanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
