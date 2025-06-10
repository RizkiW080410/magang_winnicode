<?php

namespace App\Filament\Admin\Resources\SosisalMediaResource\Pages;

use App\Filament\Admin\Resources\SosisalMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSosisalMedia extends EditRecord
{
    protected static string $resource = SosisalMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
