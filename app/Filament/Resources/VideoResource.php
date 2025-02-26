<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoResource\Pages;
use App\Filament\Resources\VideoResource\RelationManagers;
use App\Models\Video;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required(),
                Forms\Components\TextInput::make('posisi')
                    ->required(),
                Forms\Components\Textarea::make('keterangan')
                    ->nullable(),
                Forms\Components\FileUpload::make('video')
                    ->required(),
                Forms\Components\TextInput::make('urutan')
                    ->numeric()
                    ->nullable(),
                Forms\Components\TextInput::make('bahasa')
                    ->required(),
                Forms\Components\FileUpload::make('gambar')
                    ->nullable(),
                Forms\Components\Select::make('id_user')
                    ->relationship('users', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->label('Judul'),
                Tables\Columns\TextColumn::make('posisi')
                    ->searchable()
                    ->label('Posisi'),
                Tables\Columns\TextColumn::make('keterangan')
                    ->searchable()
                    ->label('Keterangan'),
                Tables\Columns\ImageColumn::make('video')
                    ->label('Video'),
                Tables\Columns\TextColumn::make('urutan')
                    ->searchable()
                    ->label('Urutan'),
                Tables\Columns\TextColumn::make('bahasa')
                    ->searchable()
                    ->label('Bahasa'),
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar'),
                Tables\Columns\TextColumn::make('users.name')
                    ->label('User'),
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
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }
}
