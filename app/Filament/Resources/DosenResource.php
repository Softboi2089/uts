<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DosenResource\Pages;
use App\Filament\Resources\DosenResource\RelationManagers;
use App\Models\Dosen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DosenResource extends Resource
{
    protected static ?string $model = Dosen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Manajemen Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('nip')
                    ->label('NIP')
                    ->numeric()
                    ->maxLength(18)
                    ->required(),
                Forms\Components\TextInput::make('nama')
                    ->label('Nama')
                    ->required(),
                Forms\Components\TextInput::make('no_hp')
                    ->label('No HP')
                    ->tel()
                    ->required(),
                Forms\Components\Select::make('program_studi')
                    ->label('Program Studi')
                    ->options([
                        'Teknik Informatika' => 'Teknik Informatika',
                        'Sistem Informasi' => 'Sistem Informasi',
                    ])
                    ->required(),
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'Aktif' => 'Aktif',
                        'Tidak Aktif' => 'Tidak Aktif',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('alamat')
                    ->label('Alamat')
                    ->rows(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
                Tables\Columns\TextColumn::make('nip')->label('NIP'),
                Tables\Columns\TextColumn::make('no_hp')->label('No HP'),
                Tables\Columns\TextColumn::make('program_studi')->label('Program Studi'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('alamat')->label('Alamat')->limit(20),
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
            'index' => Pages\ListDosens::route('/'),
            'create' => Pages\CreateDosen::route('/create'),
            'edit' => Pages\EditDosen::route('/{record}/edit'),
        ];
    }
}
