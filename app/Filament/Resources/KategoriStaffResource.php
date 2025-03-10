<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriStaffResource\Pages;
use App\Filament\Resources\KategoriStaffResource\RelationManagers;
use App\Models\KategoriStaff;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriStaffResource extends Resource
{
    protected static ?string $model = KategoriStaff::class;

    protected static ?string $navigationLabel = 'Kategori Staff';

    protected static ?string $navigationGroup = 'Sumber Daya';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('bahasa')
                ->options([
                    'ID' => 'Indonesia',
                    'EN' => 'English',
                ])->required(),
                Forms\Components\TextInput::make('slug_kategori_staff')->required(),
                Forms\Components\TextInput::make('nama_kategori_staff')->required(),
                Forms\Components\Textarea::make('keterangan')->required(),
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
                Tables\Columns\TextColumn::make('slug_kategori_staff')
                    ->searchable()
                    ->label('Slug Kategori Staff'),
                Tables\Columns\TextColumn::make('nama_kategori_staff')
                    ->searchable()
                    ->label('Nama Kategori Staff'),
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
            'index' => Pages\ListKategoriStaff::route('/'),
            'create' => Pages\CreateKategoriStaff::route('/create'),
            'edit' => Pages\EditKategoriStaff::route('/{record}/edit'),
        ];
    }
}
