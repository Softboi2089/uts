<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanPenelitianDosenResource\Pages;
use App\Filament\Resources\LaporanPenelitianDosenResource\RelationManagers;
use App\Models\LaporanPenelitianDosen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaporanPenelitianDosenResource extends Resource
{
    protected static ?string $model = \App\Models\LaporanPenelitianDosen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Monitoring Aktivitas Akademik';

    protected static ?string $modelLabel = 'Laporan Penelitian Dosen'; // untuk StatusAkademikMahasiswaResource

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLaporanPenelitianDosens::route('/'),
            'create' => Pages\CreateLaporanPenelitianDosen::route('/create'),
            'edit' => Pages\EditLaporanPenelitianDosen::route('/{record}/edit'),
        ];
    }
    
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
