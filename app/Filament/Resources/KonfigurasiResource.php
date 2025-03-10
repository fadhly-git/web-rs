<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KonfigurasiResource\Pages;
use App\Filament\Resources\KonfigurasiResource\RelationManagers;
use App\Models\Konfigurasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KonfigurasiResource extends Resource
{
    protected static ?string $model = Konfigurasi::class;

    protected static ?string $navigationLabel = 'Konfigurasi';

    protected static ?string $navigationGroup = 'Sumber Daya';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('bahasa')
                ->options([
                    'ID' => 'Indonesia',
                    'EN' => 'English',
                ])->required(),
                Forms\Components\TextInput::make('namaweb')->required(),
                Forms\Components\TextInput::make('nama_singkat'),
                Forms\Components\TextInput::make('tagline'),
                Forms\Components\TextInput::make('tagline2'),
                Forms\Components\RichEditor::make('tentang')->columnSpanFull()->toolbarButtons([
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
                Forms\Components\RichEditor::make('deksripsi')->columnSpanFull()->toolbarButtons([
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
                Forms\Components\TextInput::make('website'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\TextInput::make('email_cadangan'),
                Forms\Components\Textarea::make('alamat'),
                Forms\Components\TextInput::make('telepon'),
                Forms\Components\TextInput::make('hp'),
                Forms\Components\TextInput::make('fax'),
                Forms\Components\TextInput::make('logo'),
                Forms\Components\TextInput::make('icon'),
                Forms\Components\TextInput::make('keywords'),
                Forms\Components\Textarea::make('metatext'),
                Forms\Components\TextInput::make('facebook'),
                Forms\Components\TextInput::make('twitter'),
                Forms\Components\TextInput::make('instagram'),
                Forms\Components\TextInput::make('googlep_plus'),
                Forms\Components\TextInput::make('nama_facebook'),
                Forms\Components\TextInput::make('nama_twitter'),
                Forms\Components\TextInput::make('nama_instagram'),
                Forms\Components\TextInput::make('nama_googlep_plus'),
                Forms\Components\TextInput::make('singkatan'),
                Forms\Components\TextInput::make('google_maps'),
                Forms\Components\TextInput::make('judul_1'),
                Forms\Components\TextInput::make('pesan_1'),
                Forms\Components\TextInput::make('judul_2'),
                Forms\Components\TextInput::make('pesan_2'),
                Forms\Components\TextInput::make('judul_3'),
                Forms\Components\TextInput::make('pesan_3'),
                Forms\Components\TextInput::make('judul_4'),
                Forms\Components\TextInput::make('pesan_4'),
                Forms\Components\TextInput::make('judul_5'),
                Forms\Components\TextInput::make('pesan_5'),
                Forms\Components\TextInput::make('judul_6'),
                Forms\Components\TextInput::make('pesan_6'),
                Forms\Components\TextInput::make('isi_1'),
                Forms\Components\TextInput::make('isi_2'),
                Forms\Components\TextInput::make('isi_3'),
                Forms\Components\TextInput::make('isi_4'),
                Forms\Components\TextInput::make('isi_5'),
                Forms\Components\TextInput::make('isi_6'),
                Forms\Components\TextInput::make('link_1'),
                Forms\Components\TextInput::make('link_2'),
                Forms\Components\TextInput::make('link_3'),
                Forms\Components\TextInput::make('link_4'),
                Forms\Components\TextInput::make('link_5'),
                Forms\Components\TextInput::make('link_6'),
                Forms\Components\Textarea::make('javawebmedia'),
                Forms\Components\FileUpload::make('gambar'),
                Forms\Components\FileUpload::make('video'),
                Forms\Components\Textarea::make('rekening'),
                Forms\Components\Textarea::make('prolog_topik'),
                Forms\Components\Textarea::make('prolog_program'),
                Forms\Components\Textarea::make('prolog_sekretariat'),
                Forms\Components\Textarea::make('prolog_aksi'),
                Forms\Components\Textarea::make('prolog_kolaborasi'),
                Forms\Components\Textarea::make('prolog_sebaran'),
                Forms\Components\TextInput::make('gambar_berita'),
                Forms\Components\Textarea::make('prolog_agenda'),
                Forms\Components\Textarea::make('prolog_wawasan'),
                Forms\Components\TextInput::make('protocol'),
                Forms\Components\TextInput::make('smtp_host'),
                Forms\Components\TextInput::make('smtp_port'),
                Forms\Components\TextInput::make('smtp_timeout'),
                Forms\Components\TextInput::make('smtp_user'),
                Forms\Components\TextInput::make('smtp_pass'),
                Forms\Components\TextInput::make('judul_pembayaran'),
                Forms\Components\Textarea::make('isi_pembayaran'),
                Forms\Components\TextInput::make('gambar_pembayaran'),
                Forms\Components\TextInput::make('link_bawah_peta'),
                Forms\Components\TextInput::make('text_bawah_peta'),
                Forms\Components\Select::make('cara_pesan')
                    ->options([
                        'Keranjang Belanja' => 'Keranjang Belanja',
                        'Formulir Pemesanan' => 'Formulir Pemesanan',
                    ]),
                Forms\Components\Select::make('id_user')
                    ->relationship('users', 'name')->required(),
                Forms\Components\DateTimePicker::make('created_at')->hidden(),
                Forms\Components\DateTimePicker::make('updated_at')->hidden(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bahasa')
                ->formatStateUsing(function ($state) {
                    return $state === 'EN' ? 'English' : 'Indonesia';
                }),
                Tables\Columns\TextColumn::make('namaweb'),
                Tables\Columns\TextColumn::make('nama_singkat'),
                Tables\Columns\TextColumn::make('tagline'),
                Tables\Columns\TextColumn::make('tagline2'),
                Tables\Columns\TextColumn::make('tentang'),
                Tables\Columns\TextColumn::make('deskripsi'),
                Tables\Columns\TextColumn::make('website'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('email_cadangan'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('telepon'),
                Tables\Columns\TextColumn::make('hp'),
                Tables\Columns\TextColumn::make('fax'),
                Tables\Columns\TextColumn::make('logo'),
                Tables\Columns\TextColumn::make('icon'),
                Tables\Columns\TextColumn::make('keywords'),
                Tables\Columns\TextColumn::make('metatext'),
                Tables\Columns\TextColumn::make('facebook'),
                Tables\Columns\TextColumn::make('twitter'),
                Tables\Columns\TextColumn::make('instagram'),
                Tables\Columns\TextColumn::make('google_plus'),
                Tables\Columns\TextColumn::make('nama_facebook'),
                Tables\Columns\TextColumn::make('nama_twitter'),
                Tables\Columns\TextColumn::make('nama_instagram'),
                Tables\Columns\TextColumn::make('nama_google_plus'),
                Tables\Columns\TextColumn::make('singkatan'),
                Tables\Columns\TextColumn::make('google_map'),
                Tables\Columns\TextColumn::make('judul_1'),
                Tables\Columns\TextColumn::make('pesan_1'),
                Tables\Columns\TextColumn::make('judul_2'),
                Tables\Columns\TextColumn::make('pesan_2'),
                Tables\Columns\TextColumn::make('judul_3'),
                Tables\Columns\TextColumn::make('pesan_3'),
                Tables\Columns\TextColumn::make('judul_4'),
                Tables\Columns\TextColumn::make('pesan_4'),
                Tables\Columns\TextColumn::make('judul_5'),
                Tables\Columns\TextColumn::make('pesan_5'),
                Tables\Columns\TextColumn::make('judul_6'),
                Tables\Columns\TextColumn::make('pesan_6'),
                Tables\Columns\TextColumn::make('isi_1'),
                Tables\Columns\TextColumn::make('isi_2'),
                Tables\Columns\TextColumn::make('isi_3'),
                Tables\Columns\TextColumn::make('isi_4'),
                Tables\Columns\TextColumn::make('isi_5'),
                Tables\Columns\TextColumn::make('isi_6'),
                Tables\Columns\TextColumn::make('link_1'),
                Tables\Columns\TextColumn::make('link_2'),
                Tables\Columns\TextColumn::make('link_3'),
                Tables\Columns\TextColumn::make('link_4'),
                Tables\Columns\TextColumn::make('link_5'),
                Tables\Columns\TextColumn::make('link_6'),
                Tables\Columns\TextColumn::make('javawebmedia'),
                Tables\Columns\TextColumn::make('gambar'),
                Tables\Columns\TextColumn::make('video'),
                Tables\Columns\TextColumn::make('rekening'),
                Tables\Columns\TextColumn::make('prolog_topik'),
                Tables\Columns\TextColumn::make('prolog_program'),
                Tables\Columns\TextColumn::make('prolog_sekretariat'),
                Tables\Columns\TextColumn::make('prolog_aksi'),
                Tables\Columns\TextColumn::make('prolog_kolaborasi'),
                Tables\Columns\TextColumn::make('prolog_sebaran'),
                Tables\Columns\TextColumn::make('gambar_berita'),
                Tables\Columns\TextColumn::make('prolog_agenda'),
                Tables\Columns\TextColumn::make('prolog_wawasan'),
                Tables\Columns\TextColumn::make('protocol'),
                Tables\Columns\TextColumn::make('smtp_host'),
                Tables\Columns\TextColumn::make('smtp_port'),
                Tables\Columns\TextColumn::make('smtp_timeout'),
                Tables\Columns\TextColumn::make('smtp_user'),
                Tables\Columns\TextColumn::make('smtp_pass'),
                Tables\Columns\TextColumn::make('judul_pembayaran'),
                Tables\Columns\TextColumn::make('isi_pembayaran'),
                Tables\Columns\TextColumn::make('gambar_pembayaran'),
                Tables\Columns\TextColumn::make('link_bawah_peta'),
                Tables\Columns\TextColumn::make('text_bawah_peta'),
                Tables\Columns\TextColumn::make('cara_pesan'),
                Tables\Columns\TextColumn::make('id_user'),
                Tables\Columns\TextColumn::make('created_at'),
                Tables\Columns\TextColumn::make('updated_at'),
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
            'index' => Pages\ListKonfigurasis::route('/'),
            'create' => Pages\CreateKonfigurasi::route('/create'),
            'edit' => Pages\EditKonfigurasi::route('/{record}/edit'),
        ];
    }
}
