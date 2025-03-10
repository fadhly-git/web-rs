<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DownloadResource\Pages;
use App\Filament\Resources\DownloadResource\RelationManagers;
use App\Models\Download;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DownloadResource extends Resource
{
    protected static ?string $model = Download::class;

    protected static ?string $navigationLabel = 'Download'; 

    protected static ?string $navigationGroup = 'Sumber Daya';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_kategori_download')
                    ->relationship('kategori', 'nama_kategori_download')
                    ->required(),
                Forms\Components\Select::make('id_user')
                    ->relationship('users', 'name')
                    ->required(),
                Forms\Components\Select::make('bahasa')
                    ->options([
                        'ID' => 'Indonesian',
                        'EN' => 'English',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('judul_download')
                    ->nullable(),
                
                Forms\Components\RichEditor::make('isi')
                    ->nullable()->toolbarButtons([
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])->columnSpanFull(),
                Forms\Components\TextInput::make('jenis_download')
                    ->maxLength(20)
                    ->required(),
                Forms\Components\FileUpload::make('gambar')
                    ->required(),
                Forms\Components\TextInput::make('website')
                    ->nullable(),
                Forms\Components\TextInput::make('hits')
                    ->numeric()
                    ->required(),
                Forms\Components\DatePicker::make('tanggal')
                    ->label('Created At')->native(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kategori.nama_kategori_download')
                    ->label('Category'),
                Tables\Columns\TextColumn::make('users.name')
                    ->label('User'),
                Tables\Columns\TextColumn::make('bahasa')
                    ->formatStateUsing(function ($state) {
                        return $state === 'EN' ? 'English' : 'Indonesian';
                    }),
                Tables\Columns\TextColumn::make('judul_download')
                    ->searchable()
                    ->sortable()
                    ->label('Title'),
                Tables\Columns\TextColumn::make('jenis_download')
                    ->searchable()
                    ->sortable()
                    ->label('Type'),
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('website')
                    ->label('Website'),
                Tables\Columns\TextColumn::make('hits')
                    ->label('Hits'),
                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Created At'),
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
            'index' => Pages\ListDownloads::route('/'),
            'create' => Pages\CreateDownload::route('/create'),
            'edit' => Pages\EditDownload::route('/{record}/edit'),
        ];
    }
}
