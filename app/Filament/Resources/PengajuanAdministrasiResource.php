<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengajuanAdministrasiResource\Pages;
use App\Filament\Resources\PengajuanAdministrasiResource\RelationManagers;
use App\Models\PengajuanAdministrasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengajuanAdministrasiResource extends Resource
{
    protected static ?string $model = \App\Models\PengajuanAdministrasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Monitoring Aktivitas Akademik';

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
            'index' => Pages\ListPengajuanAdministrasis::route('/'),
            'create' => Pages\CreatePengajuanAdministrasi::route('/create'),
            'edit' => Pages\EditPengajuanAdministrasi::route('/{record}/edit'),
        ];
    }
    
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
