<?php

namespace App\Filament\Admin\Resources\KomentarResource\Pages;

use App\Filament\Admin\Resources\KomentarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKomentar extends EditRecord
{
    protected static string $resource = KomentarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
