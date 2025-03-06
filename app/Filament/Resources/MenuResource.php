<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_menu')->required()->label('Nama Menu'),
                Forms\Components\TextInput::make('route')->required()->label('Route'),
                Forms\Components\Select::make('kategori')
                    ->options([
                        'about' => 'Tentang Kami',
                        'services' => 'Layanan',
                        'news' => 'Berita',
                        'contact' => 'Kontak',
                    ])
                    ->label('Kategori'),
                Forms\Components\Select::make('status')
                ->options([
                    'AKTIF' => 'AKTIF',
                    'TIDAK' => 'TIDAK',
                ])
                ->required()->label('Status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_menu')
                    ->searchable()
                    ->label('Nama Menu')->searchable(),
                Tables\Columns\TextColumn::make('route')
                    ->searchable()
                    ->label('Route'),
                Tables\Columns\TextColumn::make('kategori')
                ->formatStateUsing(function ($state) {
                    $options = [
                        'about' => 'Tentang Kami',
                        'services' => 'Layanan',
                        'news' => 'Berita',
                        'contact' => 'Kontak',
                    ];
                    return $options[$state] ?? $state;
                }),
                Tables\Columns\TextColumn::make('status')
                    ->formatStateUsing(function ($state) {
                        return $state === 'AKTIF' ? 'AKTIF' : 'TIDAK';
                    })
                    ->searchable()
                    ->label('Status'),
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
