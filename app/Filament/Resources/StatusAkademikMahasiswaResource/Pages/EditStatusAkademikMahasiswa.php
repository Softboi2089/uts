<?php

namespace App\Filament\Resources\StatusAkademikMahasiswaResource\Pages;

use App\Filament\Resources\StatusAkademikMahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatusAkademikMahasiswa extends EditRecord
{
    protected static string $resource = StatusAkademikMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
