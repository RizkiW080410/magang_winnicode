<?php

namespace App\Filament\Admin\Resources\TerbitSahamResource\Pages;

use App\Filament\Admin\Resources\TerbitSahamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTerbitSaham extends EditRecord
{
    protected static string $resource = TerbitSahamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
