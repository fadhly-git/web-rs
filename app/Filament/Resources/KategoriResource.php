<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriResource\Pages;
use App\Filament\Resources\KategoriResource\RelationManagers;
use App\Models\Kategori;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriResource extends Resource
{
    protected static ?string $model = Kategori::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_user')
                ->relationship('users', 'name'),
                Forms\Components\Select::make('bahasa')
                ->options([
                    'ID' => 'Indonesia',
                    'EN' => 'English',
                ])->required(),
                Forms\Components\TextInput::make('slug_kategori')->required(),
                Forms\Components\TextInput::make('nama_kategori')->required(),
                Forms\Components\Textarea::make('keterangan')->required(),
                Forms\Components\TextInput::make('urutan')->numeric(),
                Forms\Components\TextInput::make('hits')->numeric(),
                Forms\Components\DatePicker::make('created_at')->hidden(),
                Forms\Components\DatePicker::make('updated_at')->hidden(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('users.name')
                    ->label('User'),
                Tables\Columns\TextColumn::make('bahasa')
                    ->formatStateUsing(function ($state) {
                        return $state === 'EN' ? 'English' : 'Indonesia';
                    }),
                Tables\Columns\TextColumn::make('slug_kategori')
                    ->searchable()
                    ->label('Slug Kategori'),
                Tables\Columns\TextColumn::make('nama_kategori')
                    ->searchable()
                    ->label('Nama Kategori'),
                Tables\Columns\TextColumn::make('urutan')->label('Urutan'),
                Tables\Columns\TextColumn::make('hits')->label('Hits'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At'),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At'),
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
            'index' => Pages\ListKategoris::route('/'),
            'create' => Pages\CreateKategori::route('/create'),
            'edit' => Pages\EditKategori::route('/{record}/edit'),
        ];
    }
}
