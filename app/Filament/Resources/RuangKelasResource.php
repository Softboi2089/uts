<?php
namespace App\Filament\Resources;

use App\Filament\Resources\RuangKelasResource\Pages;
use App\Filament\Resources\RuangKelasResource\RelationManagers;
use App\Models\RuangKelas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class RuangKelasResource extends Resource
{
    protected static ?string $model = RuangKelas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Manajemen Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Ruang Kelas')
                    ->required(),
                Forms\Components\TextInput::make('kode')
                    ->label('Kode Ruang')
                    ->default(fn () => 'KLS-' . strtoupper(Str::random(4)))
                    ->required(),
                Forms\Components\TextInput::make('kapasitas')
                    ->label('Kapasitas')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(50)
                    ->required(),
                Forms\Components\Select::make('lokasi')
                    ->label('Lokasi/Lantai')
                    ->options([
                        'Lantai 1' => 'Lantai 1',
                        'Lantai 2' => 'Lantai 2',
                        'Lantai 3' => 'Lantai 3',
                        'Lantai 4' => 'Lantai 4',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('fasilitas')
                    ->label('Fasilitas')
                    ->rows(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([                Tables\Columns\TextColumn::make('nama')->label('Nama Ruang Kelas')->searchable(),
                Tables\Columns\TextColumn::make('kode')->label('Kode Ruang'),
                Tables\Columns\TextColumn::make('kapasitas')->label('Kapasitas'),
                Tables\Columns\TextColumn::make('lokasi')->label('Lokasi/Lantai'),
                Tables\Columns\TextColumn::make('fasilitas')->label('Fasilitas')->limit(20),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime('d M Y')->sortable(),
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
            'index' => Pages\ListRuangKelas::route('/'),
            'create' => Pages\CreateRuangKelas::route('/create'),
            'edit' => Pages\EditRuangKelas::route('/{record}/edit'),
        ];
    }
}
