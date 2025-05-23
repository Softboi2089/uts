<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalKuliahResource\Pages;
use App\Filament\Resources\JadwalKuliahResource\RelationManagers;
use App\Models\JadwalKuliah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalKuliahResource extends Resource
{
    protected static ?string $model = JadwalKuliah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Manajemen Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('dosen_id')
                    ->label('Dosen')
                    ->relationship('dosen', 'nama')
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('mata_kuliah')
                    ->label('Mata Kuliah')
                    ->options([
                        // Teknik Informatika
                        'Algoritma dan Pemrograman' => 'Algoritma dan Pemrograman',
                        'Struktur Data' => 'Struktur Data',
                        'Basis Data' => 'Basis Data',
                        'Jaringan Komputer' => 'Jaringan Komputer',
                        'Sistem Operasi' => 'Sistem Operasi',
                        'Pemrograman Web' => 'Pemrograman Web',
                        'Kecerdasan Buatan' => 'Kecerdasan Buatan',
                        'Rekayasa Perangkat Lunak' => 'Rekayasa Perangkat Lunak',
                        'Pemrograman Mobile' => 'Pemrograman Mobile',
                        // Sistem Informasi
                        'Analisis dan Perancangan Sistem Informasi' => 'Analisis dan Perancangan Sistem Informasi',
                        'Manajemen Proyek TI' => 'Manajemen Proyek TI',
                        'Sistem Informasi Manajemen' => 'Sistem Informasi Manajemen',
                        'Audit Sistem Informasi' => 'Audit Sistem Informasi',
                        'E-Business' => 'E-Business',
                        'Data Mining' => 'Data Mining',
                        'Keamanan Informasi' => 'Keamanan Informasi',
                    ])
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('ruang_kelas_id')
                    ->label('Ruang Kelas')
                    ->relationship('ruangKelas', 'nama')
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('semester')
                    ->label('Semester')
                    ->options([
                        '1' => 'Semester 1',
                        '2' => 'Semester 2',
                        '3' => 'Semester 3',
                        '4' => 'Semester 4',
                        '5' => 'Semester 5',
                        '6' => 'Semester 6',
                        '7' => 'Semester 7',
                        '8' => 'Semester 8',
                    ])
                    ->required(),
                Forms\Components\Select::make('hari')
                    ->label('Hari')
                    ->options([
                        'Senin' => 'Senin',
                        'Selasa' => 'Selasa',
                        'Rabu' => 'Rabu',
                        'Kamis' => 'Kamis',
                        'Jumat' => 'Jumat',
                        'Sabtu' => 'Sabtu',
                    ])
                    ->required(),
                Forms\Components\TimePicker::make('jam_mulai')
                    ->label('Jam Mulai')
                    ->required(),
                Forms\Components\TimePicker::make('jam_selesai')
                    ->label('Jam Selesai')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('dosen.nama')->label('Dosen'),
                Tables\Columns\TextColumn::make('programStudi.nama')->label('Program Studi'),
                Tables\Columns\TextColumn::make('ruangKelas.nama')->label('Ruang Kelas'),
                Tables\Columns\TextColumn::make('mata_kuliah')->label('Mata Kuliah'),
                Tables\Columns\TextColumn::make('hari')->label('Hari'),
                Tables\Columns\TextColumn::make('jam_mulai')->label('Jam Mulai'),
                Tables\Columns\TextColumn::make('jam_selesai')->label('Jam Selesai'),
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
            'index' => Pages\ListJadwalKuliahs::route('/'),
            'create' => Pages\CreateJadwalKuliah::route('/create'),
            'edit' => Pages\EditJadwalKuliah::route('/{record}/edit'),
        ];
    }
}
