<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriResource\Pages;
use App\Filament\Resources\GaleriResource\RelationManagers;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationLabel = 'Galeri';

    protected static ?string $navigationGroup = 'Sumber Daya';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_kategori_galeri')
                    ->relationship('kategori', 'nama_kategori_galeri')
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
                Forms\Components\TextInput::make('judul_galeri')
                    ->nullable(),
                Forms\Components\TextInput::make('jenis_galeri')
                    ->maxLength(20)
                    ->required(),
                Forms\Components\RichEditor::make('isi')->toolbarButtons([
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
                ])->nullable()->columnSpanFull(),
                Forms\Components\FileUpload::make('gambar')
                    ->required(),
                Forms\Components\TextInput::make('website')
                    ->nullable(),
                Forms\Components\TextInput::make('hits')
                    ->numeric()
                    ->required(),
                Forms\Components\Select::make('popup_status')
                    ->options([
                        'PUBLISH' => 'Publish',
                        'DRAFT' => 'Draft',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('urutan')
                    ->numeric()
                    ->required(),
                Forms\Components\Select::make('status_text')
                    ->options([
                        'Ya' => 'Ya',
                        'Tidak' => 'Tidak',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kategori.nama_kategori_galeri')
                    ->label('Category'),
                Tables\Columns\TextColumn::make('users.name')
                    ->label('User'),
                Tables\Columns\TextColumn::make('bahasa')
                    ->formatStateUsing(function ($state) {
                        return $state === 'EN' ? 'English' : 'Indonesian';
                    }),
                Tables\Columns\TextColumn::make('judul_galeri')
                    ->searchable()
                    ->sortable()
                    ->label('Title'),
                Tables\Columns\TextColumn::make('jenis_galeri')
                    ->searchable()
                    ->sortable()
                    ->label('Type'),
                Tables\Columns\TextColumn::make('hits')
                    ->searchable()
                    ->sortable()
                    ->label('Hits'),
                Tables\Columns\TextColumn::make('popup_status')
                    ->formatStateUsing(fn ($state) => $state === 'Y' ? 'Yes' : 'No')
                    ->searchable()
                    ->sortable()
                    ->label('Popup Status'),
                Tables\Columns\TextColumn::make('urutan')
                    ->searchable()
                    ->sortable()
                    ->label('Order'),
                Tables\Columns\TextColumn::make('status_text')
                    ->formatStateUsing(fn ($state) => $state === 'PUBLISH' ? 'Publish' : 'Draft')
                    ->searchable()
                    ->sortable()
                    ->label('Status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->searchable()
                    ->sortable()
                    ->label('Created At'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->searchable()
                    ->sortable()
                    ->label('Updated At'),
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
