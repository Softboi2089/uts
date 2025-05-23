<?php

namespace App\Filament\Resources\LaporanPenelitianDosenResource\Pages;

use App\Filament\Resources\LaporanPenelitianDosenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanPenelitianDosen extends EditRecord
{
    protected static string $resource = LaporanPenelitianDosenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
