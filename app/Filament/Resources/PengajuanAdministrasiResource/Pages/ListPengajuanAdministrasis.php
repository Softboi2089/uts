<?php

namespace App\Filament\Resources\PengajuanAdministrasiResource\Pages;

use App\Filament\Resources\PengajuanAdministrasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengajuanAdministrasis extends ListRecords
{
    protected static string $resource = PengajuanAdministrasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
