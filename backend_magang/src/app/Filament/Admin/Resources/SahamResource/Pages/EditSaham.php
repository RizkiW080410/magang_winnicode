<?php

namespace App\Filament\Admin\Resources\SahamResource\Pages;

use App\Filament\Admin\Resources\SahamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSaham extends EditRecord
{
    protected static string $resource = SahamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
