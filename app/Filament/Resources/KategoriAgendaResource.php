<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriAgendaResource\Pages;
use App\Filament\Resources\KategoriAgendaResource\RelationManagers;
use App\Models\KategoriAgenda;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriAgendaResource extends Resource
{
    protected static ?string $model = KategoriAgenda::class;

    protected static ?string $navigationLabel = 'Kategori Agenda';

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
                Forms\Components\TextInput::make('slug_kategori_agenda')->required(),
                Forms\Components\TextInput::make('nama_kategori_agenda')->required(),
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
                Tables\Columns\TextColumn::make('slug_kategori_agenda')
                    ->searchable()
                    ->label('Slug Kategori Agenda'),
                Tables\Columns\TextColumn::make('nama_kategori_agenda')
                    ->searchable()
                    ->label('Nama Kategori Agenda'),
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
            'index' => Pages\ListKategoriAgendas::route('/'),
            'create' => Pages\CreateKategoriAgenda::route('/create'),
            'edit' => Pages\EditKategoriAgenda::route('/{record}/edit'),
        ];
    }
}
