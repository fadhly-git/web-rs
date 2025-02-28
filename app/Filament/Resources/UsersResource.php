<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;
use App\Filament\Resources\UsersResource\RelationManagers;
use App\Models\Users;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
class UsersResource extends Resource
{
    protected static ?string $model = Users::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->label('Nama'),
                Forms\Components\TextInput::make('email')->email()->required()->unique('users', 'email')->label('Email')
                ->validationMessages([
                    'unique' => 'The :attribute has already been registered.',
                ]),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->confirmed()
                    ->revealable()
                    ->dehydrateStateUsing(fn ($state) => bcrypt($state)),
                Forms\Components\TextInput::make('password_confirmation')->password()->required()->label('Konfimasi Password')->revealable(),
                Forms\Components\Select::make('akses_level')->options([
                    'ADMIN' => 'Admin',
                ])->required()->default('ADMIN')->label('Akses Level'),
                Forms\Components\FileUpload::make('gambar')->image()->avatar()->required()->label('Gambar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('akses_level'),
                Tables\Columns\ImageColumn::make('gambar')->label('Gambar'),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }
}
