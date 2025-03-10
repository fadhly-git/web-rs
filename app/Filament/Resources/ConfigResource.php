<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConfigResource\Pages;
use App\Filament\Resources\ConfigResource\RelationManagers;
use FilamentTiptapEditor\TiptapEditor;
use App\Models\Config;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Forms\Components\RichEditor;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConfigResource extends Resource
{
    protected static ?string $model = Config::class;

    protected static ?string $navigationLabel = 'Config';

    protected static ?string $navigationGroup = 'Konfigurasi Sistem';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_web')->label('Name Web')->required(false),
                Forms\Components\FileUpload::make('logo')->label('Logo')->required(false),
                Forms\Components\TextInput::make('main_link1')->label('Main Link 1')->required(false),
                Forms\Components\TextInput::make('main_link2')->label('Main Link 2')->required(false),
                Forms\Components\TextInput::make('main_link3')->label('Main Link 3')->required(false),
                Forms\Components\TextInput::make('email')->label('Email')->required(false),
                Forms\Components\TextInput::make('phone')->label('Phone')->required(false),
                Forms\Components\TextInput::make('address')->label('Address')->required(false),
                Forms\Components\TextInput::make('facebook')->label('Facebook')->required(false),
                Forms\Components\TextInput::make('twitter')->label('Twitter')->required(false),
                Forms\Components\TextInput::make('instagram')->label('Instagram')->required(false),
                Forms\Components\TextInput::make('youtube')->label('YouTube')->required(false),
                TiptapEditor::make('sambutan')->label('Sambutan')->required(false)->columnSpanFull(),
                TiptapEditor::make('pesan_1')->label('Pesan 1')->required(false)->columnSpanFull(),
                Forms\Components\TextInput::make('icon_1')->label('Icon 1')->required(false)->placeholder('menggunakan material icon')->helperText('copy svg https://fonts.google.com/icons')->columnSpanFull(),
                TiptapEditor::make('pesan_2')->label('Pesan 2')->required(false)->columnSpanFull(),
                Forms\Components\TextInput::make('icon_2')->label('Icon 2')->required(false)->placeholder('menggunakan material icon')->columnSpanFull(),
                TiptapEditor::make('pesan_3')->label('Pesan 3')->required(false)->columnSpanFull(),
                Forms\Components\TextInput::make('icon_3')->label('Icon 3')->required(false)->placeholder('menggunakan material icon')->columnSpanFull(),
                TiptapEditor::make('pesan_4')->label('Pesan 4')->required(false)->columnSpanFull(),
                Forms\Components\TextInput::make('icon_4')->label('Icon 4')->required(false)->placeholder('menggunakan material icon')->columnSpanFull(),
                Forms\Components\TextInput::make('heading_sambutan_2')->label('Heading Sambutan 2')->required(false)->columnSpanFull(),
                TiptapEditor::make('sambutan_2')->label('Sambutan 2')->required(false)->columnSpanFull(),
                Forms\Components\FileUpload::make('gambar_dir')->label('Gambar Sambutan 2')->required(false)->columnSpanFull(),
                TiptapEditor::make('layanan_medis')->label('Layanan Medis')->required(false)->columnSpanFull(),
                Forms\Components\FileUpload::make('gambar_layanan_medis')->label('Gambar Layanan Medis')->required(false)->columnSpanFull(),
                Forms\Components\TextInput::make('link_medis')->label('Link Layanan Medis')->required(false),
                TiptapEditor::make('layanan_penunjang')->label('Layanan Penunjang')->required(false)->columnSpanFull(),
                Forms\Components\FileUpload::make('gambar_layanan_penunjang')->label('Gambar Layanan Penunjang')->required(false)->columnSpanFull(),
                Forms\Components\TextInput::make('link_penunjang')->label('Link Layanan Penunjang')->required(false),
                TiptapEditor::make('iklan')->label('Iklan')->required(false)->columnSpanFull(),
                Forms\Components\FileUpload::make('gambar')->label('Gambar Iklan')->required(false),
                Forms\Components\TextInput::make('link_janji_temu')->label('Link Janji Temu')->required(false),
                TiptapEditor::make('news')->label('News')->required(false)->columnSpanFull(),
                TiptapEditor::make('footer')->label('Footer')->required(false)->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_web')->label('Name Web'),
                Tables\Columns\ImageColumn::make('logo')->label('Logo'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('phone')->label('Phone'),
                Tables\Columns\TextColumn::make('address')->label('Address'),
                Tables\Columns\TextColumn::make('facebook')->label('Facebook'),
                Tables\Columns\TextColumn::make('twitter')->label('Twitter'),
                Tables\Columns\TextColumn::make('instagram')->label('Instagram'),
                Tables\Columns\TextColumn::make('youtube')->label('YouTube'),
                Tables\Columns\TextColumn::make('sambutan')->label('Sambutan'),
                Tables\Columns\TextColumn::make('pesan_1')->label('Pesan 1'),
                Tables\Columns\TextColumn::make('icon_1')->label('Icon 1'),
                Tables\Columns\TextColumn::make('pesan_2')->label('Pesan 2'),
                Tables\Columns\ImageColumn::make('icon_2')->label('Icon 2'),
                Tables\Columns\TextColumn::make('pesan_3')->label('Pesan 3'),
                Tables\Columns\ImageColumn::make('icon_3')->label('Icon 3'),
                Tables\Columns\TextColumn::make('pesan_4')->label('Pesan 4'),
                Tables\Columns\ImageColumn::make('icon_4')->label('Icon 4'),
                Tables\Columns\TextColumn::make('heading_sambutan_2')->label('Heading Sambutan 2'),
                Tables\Columns\TextColumn::make('sambutan_2')->label('Sambutan 2'),
                Tables\Columns\ImageColumn::make('gambar_dir')->label('Gambar Sambutan 2'),
                Tables\Columns\TextColumn::make('layanan_medis')->label('Layanan Medis'),
                Tables\Columns\ImageColumn::make('gambar_layanan_medis')->label('Gambar Layanan Medis'),
                Tables\Columns\TextColumn::make('layanan_penunjang')->label('Layanan Penunjang'),
                Tables\Columns\ImageColumn::make('gambar_layanan_penunjang')->label('Gambar Layanan Penunjang'),
                Tables\Columns\TextColumn::make('iklan')->label('Iklan'),
                Tables\Columns\TextColumn::make('gambar')->label('Gambar Iklan'),
                Tables\Columns\TextColumn::make('news')->label('News'),
                Tables\Columns\TextColumn::make('footer')->label('Footer'),
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
            'index' => Pages\ListConfigs::route('/'),
            'create' => Pages\CreateConfig::route('/create'),
            'edit' => Pages\EditConfig::route('/{record}/edit'),
        ];
    }
}
