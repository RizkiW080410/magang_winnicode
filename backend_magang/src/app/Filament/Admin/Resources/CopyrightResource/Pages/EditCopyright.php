<?php

namespace App\Filament\Admin\Resources\CopyrightResource\Pages;

use App\Filament\Admin\Resources\CopyrightResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCopyright extends EditRecord
{
    protected static string $resource = CopyrightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
