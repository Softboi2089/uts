<?php

namespace App\Filament\Resources\PengajuanAdministrasiResource\Pages;

use App\Filament\Resources\PengajuanAdministrasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengajuanAdministrasi extends EditRecord
{
    protected static string $resource = PengajuanAdministrasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
