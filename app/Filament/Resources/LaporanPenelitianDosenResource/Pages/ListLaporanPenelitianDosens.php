<?php

namespace App\Filament\Resources\LaporanPenelitianDosenResource\Pages;

use App\Filament\Resources\LaporanPenelitianDosenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanPenelitianDosens extends ListRecords
{
    protected static string $resource = LaporanPenelitianDosenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
