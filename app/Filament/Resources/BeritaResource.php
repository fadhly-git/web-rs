<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use FilamentTiptapEditor\TiptapEditor;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_user')
                ->relationship('users', 'name'),
                Forms\Components\Select::make('id_kategori')
                ->relationship('kategori', 'nama_kategori')->label('Kategori'),
                Forms\Components\Select::make('bahasa')
                ->options([
                    'ID' => 'Indonesia',
                    'EN' => 'English',
                ])->required(),
                Forms\Components\TextInput::make('updater')->required(),
                Forms\Components\TextInput::make('slug_berita')->required(),
                Forms\Components\TextInput::make('judul_berita')
                ->required()
                ->helperText('parameter menu frontend buka di menu'),
                Forms\Components\Select::make('status_berita')
                ->options([
                    'PUBLISH' => 'Publish',
                    'DRAFT' => 'Draft',
                ])->required(),
                Forms\Components\Select::make('jenis_berita')
                ->options([
                    'BERITA' => 'Berita',
                    'PENGUMUMAN' => 'Pengumuman',
                ])->required(),
                TiptapEditor::make('isi')
                ->required()->columnSpanFull(),
                Forms\Components\RichEditor::make('keywords')->required()->toolbarButtons([
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'italic',
                    'link',
                    'redo',
                    'undo',
                ]),
                Forms\Components\FileUpload::make('gambar')->required(false)->image(),
                Forms\Components\FileUpload::make('icon')->required(false),
                Forms\Components\TextInput::make('hits')->numeric(),
                Forms\Components\TextInput::make('urutan')->numeric(),
                Forms\Components\DatePicker::make('tanggal_mulai')->required(),
                Forms\Components\DatePicker::make('tanggal_selesai')->required(),
                Forms\Components\DatePicker::make('tanggal_post')->required(),
                Forms\Components\DatePicker::make('tanggal_publish')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('users.name')
                    ->label('User'),
                Tables\Columns\TextColumn::make('kategori.nama_kategori')
                    ->label('Kategori'),
                Tables\Columns\TextColumn::make('bahasa')
                    ->formatStateUsing(function ($state) {
                        return $state === 'EN' ? 'English' : 'Indonesia';
                    }),
                Tables\Columns\TextColumn::make('updater')
                    ->searchable()
                    ->label('Updater'),
                Tables\Columns\TextColumn::make('slug_berita')
                    ->searchable()
                    ->label('Slug Berita'),
                Tables\Columns\TextColumn::make('judul_berita')
                    ->searchable()
                    ->label('Judul Berita'),
                Tables\Columns\TextColumn::make('status_berita')
                    ->formatStateUsing(function ($state) {
                        return $state === 'PUBLISH' ? 'Publish' : 'Draft';
                    }),
                
                Tables\Columns\TextColumn::make('jenis_berita')
                    ->formatStateUsing(function ($state) {
                        return $state === 'BERITA' ? 'Berita' : 'Pengumuman';
                    }),
                Tables\Columns\TextColumn::make('keywords')
                    ->searchable()
                    ->label('Keywords'),
                Tables\Columns\ImageColumn::make('gambar')
                    ->searchable()
                    ->label('Gambar'),
                Tables\Columns\ImageColumn::make('icon')
                    ->searchable()
                    ->label('Icon'),
                Tables\Columns\TextColumn::make('hits')
                    ->label('Hits'),
                Tables\Columns\TextColumn::make('urutan')
                    ->label('Urutan'),
                Tables\Columns\TextColumn::make('isi')
                    ->searchable()
                    ->label('Isi'),
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->label('Tanggal Mulai'),
                Tables\Columns\TextColumn::make('tanggal_selesai')
                    ->label('Tanggal Selesai'),
                Tables\Columns\TextColumn::make('tanggal_post')
                    ->label('Tanggal Post'),
                Tables\Columns\TextColumn::make('tanggal_publish')
                    ->label('Tanggal Publish'),
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
