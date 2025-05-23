<?php

namespace App\Filament\Resources\LaporanDosenResource\Pages;

use App\Filament\Resources\LaporanDosenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanDosen extends EditRecord
{
    protected static string $resource = LaporanDosenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
