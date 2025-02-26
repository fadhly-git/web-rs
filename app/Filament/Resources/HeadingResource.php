<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeadingResource\Pages;
use App\Filament\Resources\HeadingResource\RelationManagers;
use App\Models\Heading;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeadingResource extends Resource
{
    protected static ?string $model = Heading::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_user')
                ->relationship('users', 'name'),
                Forms\Components\TextInput::make('judul_heading')
                    ->label('Judul Heading')
                    ->required(),
                Forms\Components\Textarea::make('keterangan')
                    ->label('Keterangan')
                    ->nullable(),
                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar')
                    ->nullable(),
                Forms\Components\TextInput::make('halaman')
                    ->label('Halaman')
                    ->default('NULL'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('users.name')
                    ->label('User'),
                Tables\Columns\TextColumn::make('judul_heading')
                    ->searchable()
                    ->label('Judul Heading'),
                Tables\Columns\TextColumn::make('keterangan')
                    ->label('Keterangan'),
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar'),
                Tables\Columns\TextColumn::make('halaman')
                    ->label('Halaman'),
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
            'index' => Pages\ListHeadings::route('/'),
            'create' => Pages\CreateHeading::route('/create'),
            'edit' => Pages\EditHeading::route('/{record}/edit'),
        ];
    }
}
