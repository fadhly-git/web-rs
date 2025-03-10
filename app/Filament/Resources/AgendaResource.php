<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgendaResource\Pages;
use App\Filament\Resources\AgendaResource\RelationManagers;
use App\Models\Agenda;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AgendaResource extends Resource
{
    protected static ?string $model = Agenda::class;

    protected static ?string $navigationLabel = 'Agenda';

    protected static ?string $navigationGroup = 'Sumber Daya'; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_user')->relationship('users', 'name')->label('User'),
                Forms\Components\Select::make('id_kategori_agenda')->relationship('kategoriagenda', 'nama_kategori_agenda')->label('Nama Kategori'),
                Forms\Components\Select::make('bahasa')->options([
                    'ID' => 'Indonesia',
                    'EN' => 'English',
                ])->required(),
                Forms\Components\TextInput::make('slug_agenda')->required(),
                Forms\Components\TextInput::make('judul_agenda')->required(),
                Forms\Components\Select::make('status_agenda')->options([
                    'PUBLISH' => 'Publish',
                    'DRAFT' => 'Draft',
                ])->required(),
                RichEditor::make('isi')->required()->columnSpanFull()->toolbarButtons([
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
                ]),
                Forms\Components\FileUpload::make('gambar')->required(),
                RichEditor::make('keywords')->required()->toolbarButtons([
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'italic',
                    'link',
                    'redo',
                    'undo',
                ]),
                Forms\Components\FileUpload::make('icon')->required(),
                Forms\Components\Select::make('jenis_agenda')->options([
                    'AGENDA' => 'Agenda',
                    'KEGIATAN' => 'Kegiatan',
                ])->required(),
                Forms\Components\TextInput::make('hits')->numeric(),
                Forms\Components\TextInput::make('urutan')->numeric(),
                Forms\Components\DatePicker::make('tanggal_mulai')->required(),
                Forms\Components\DatePicker::make('tanggal_selesai')->required(),
                Forms\Components\TimePicker::make('jam_mulai')->required(),
                Forms\Components\TimePicker::make('jam_selesai')->required(),
                Forms\Components\TextInput::make('tempat')->required(),
                Forms\Components\TextInput::make('google_map')->required(),
                Forms\Components\DatePicker::make('tanggal_post')->required(),
                Forms\Components\DatePicker::make('tanggal_publish')->required(),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('users.name')
                    ->label('User'),
                Tables\Columns\TextColumn::make('kategoriagenda.nama_kategori_agenda')
                    ->label('Kategori Agenda'),
                Tables\Columns\TextColumn::make('bahasa')
                    ->formatStateUsing(function ($state) {
                        return $state === 'EN' ? 'English' : 'Indonesia';
                    }),
                Tables\Columns\TextColumn::make('slug_agenda')
                    ->searchable()
                    ->label('Slug Agenda'),
                Tables\Columns\TextColumn::make('judul_agenda')
                    ->searchable()
                    ->label('Judul Agenda'),
                Tables\Columns\TextColumn::make('status_agenda')
                    ->label('Status Agenda'),
                Tables\Columns\TextColumn::make('jenis_agenda')
                    ->label('Jenis Agenda'),
                Tables\Columns\TextColumn::make('keywords')
                    ->label('Keywords'),
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar'),
                Tables\Columns\ImageColumn::make('icon')
                    ->label('Icon'),
                Tables\Columns\TextColumn::make('hits')
                    ->label('Hits'),
                Tables\Columns\TextColumn::make('urutan')
                    ->label('Urutan'),
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->label('Tanggal Mulai'),
                Tables\Columns\TextColumn::make('tanggal_selesai')
                    ->label('Tanggal Selesai'),
                Tables\Columns\TextColumn::make('jam_mulai')
                    ->label('Jam Mulai'),
                Tables\Columns\TextColumn::make('jam_selesai')
                    ->label('Jam Selesai'),
                Tables\Columns\TextColumn::make('tempat')
                    ->label('Tempat'),
                Tables\Columns\TextColumn::make('google_map')
                    ->label('Google Map'),
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
            'index' => Pages\ListAgendas::route('/'),
            'create' => Pages\CreateAgenda::route('/create'),
            'edit' => Pages\EditAgenda::route('/{record}/edit'),
        ];
    }
}
