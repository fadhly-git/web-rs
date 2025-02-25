<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RekeningResource\Pages;
use App\Filament\Resources\RekeningResource\RelationManagers;
use App\Models\Rekening;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RekeningResource extends Resource
{
    protected static ?string $model = Rekening::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_bank')->required(),
                Forms\Components\TextInput::make('nomor_rekening')->required(),
                Forms\Components\TextInput::make('atas_nama')->required(),
                Forms\Components\FileUpload::make('gambar')->required(),
                Forms\Components\TextInput::make('urutan')->numeric()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_bank')
                    ->searchable()
                    ->label('Nama Bank'),
                Tables\Columns\TextColumn::make('nomor_rekening')
                    ->searchable()
                    ->label('Nomor Rekening'),
                Tables\Columns\TextColumn::make('atas_nama')
                    ->searchable()
                    ->label('Atas Nama'),
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar'),
                Tables\Columns\TextColumn::make('urutan')
                    ->searchable()
                    ->label('Urutan'),
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
            'index' => Pages\ListRekenings::route('/'),
            'create' => Pages\CreateRekening::route('/create'),
            'edit' => Pages\EditRekening::route('/{record}/edit'),
        ];
    }
}
