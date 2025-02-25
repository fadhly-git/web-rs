<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriGaleriResource\Pages;
use App\Filament\Resources\KategoriGaleriResource\RelationManagers;
use App\Models\KategoriGaleri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriGaleriResource extends Resource
{
    protected static ?string $model = KategoriGaleri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('bahasa')
                ->options([
                    'ID' => 'Indonesia',
                    'EN' => 'English',
                ])->required(),
                Forms\Components\TextInput::make('slug_kategori_galeri')->required(),
                Forms\Components\TextInput::make('nama_kategori_galeri')->required(),
                Forms\Components\TextInput::make('urutan')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bahasa')
                    ->formatStateUsing(function ($state) {
                        return $state === 'EN' ? 'English' : 'Indonesia';
                    }),
                Tables\Columns\TextColumn::make('slug_kategori_galeri')
                    ->searchable()
                    ->label('Slug Kategori Galeri'),
                Tables\Columns\TextColumn::make('nama_kategori_galeri')
                    ->searchable()
                    ->label('Nama Kategori Galeri'),
                Tables\Columns\TextColumn::make('urutan')->label('Urutan'),
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
            'index' => Pages\ListKategoriGaleris::route('/'),
            'create' => Pages\CreateKategoriGaleri::route('/create'),
            'edit' => Pages\EditKategoriGaleri::route('/{record}/edit'),
        ];
    }
}
