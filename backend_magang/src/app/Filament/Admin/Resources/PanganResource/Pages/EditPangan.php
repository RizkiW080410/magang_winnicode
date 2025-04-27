<?php

namespace App\Filament\Admin\Resources\PanganResource\Pages;

use App\Filament\Admin\Resources\PanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPangan extends EditRecord
{
    protected static string $resource = PanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
