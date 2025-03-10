<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffResource\Pages;
use App\Filament\Resources\StaffResource\RelationManagers;
use App\Models\Staff;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StaffResource extends Resource
{
    protected static ?string $model = Staff::class;

    protected static ?string $navigationLabel = 'Staff';

    protected static ?string $navigationGroup = 'Sumber Daya';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_user')
                    ->label('User ID')
                    ->nullable()
                    ->relationship('users', 'name'),
                Forms\Components\Select::make('id_kategori_staff')
                    ->label('Kategori Staff')
                    ->relationship('kategori', 'nama_kategori_staff'),
                Forms\Components\TextInput::make('slug_staff')
                    ->label('Slug Staff')
                    ->required(),
                Forms\Components\TextInput::make('nama_staff')
                    ->label('Nama Staff')
                    ->required(),
                Forms\Components\TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->nullable(),
                Forms\Components\TextInput::make('pendidikan')
                    ->label('Pendidikan')
                    ->nullable(),
                Forms\Components\TextInput::make('expertise')
                    ->label('Expertise')
                    ->nullable(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->nullable(),
                Forms\Components\TextInput::make('telepon')
                    ->label('Telepon')
                    ->nullable(),
                Forms\Components\Textarea::make('isi')
                    ->label('Isi')
                    ->nullable(),
                Forms\Components\TextInput::make('gambar')
                    ->label('Gambar')
                    ->nullable(),
                Forms\Components\TextInput::make('status_staff')
                    ->label('Status Staff')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('keywords')
                    ->label('Keywords')
                    ->nullable(),
                Forms\Components\TextInput::make('urutan')
                    ->label('Urutan')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('users.name')
                    ->label('user')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('katergori.nama_kategori_staff')
                    ->label('Kategori Staff')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug_staff')
                    ->label('Slug Staff')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_staff')
                    ->label('Nama Staff')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->label('Jabatan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('pendidikan')
                    ->label('Pendidikan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('expertise')
                    ->label('Expertise')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('telepon')
                    ->label('Telepon')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('isi')
                    ->label('Isi')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('gambar')
                    ->label('Gambar')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status_staff')
                    ->label('Status Staff')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('keywords')
                    ->label('Keywords')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('urutan')
                    ->label('Urutan')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListStaff::route('/'),
            'create' => Pages\CreateStaff::route('/create'),
            'edit' => Pages\EditStaff::route('/{record}/edit'),
        ];
    }
}
