<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Download;
use App\Models\Galeri;
use App\Models\Heading;
use App\Models\Kategori;
use App\Models\KategoriAgenda;
use App\Models\KategoriDownload;
use App\Models\KategoriGaleri;
use App\Models\KategoriStaff;
use App\Models\Konfigurasi;
use App\Models\Rekening;
use App\Models\Staff;
use App\Models\Users;
use App\Models\Video;

class AgendaOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Agenda', 'TotalAgenda')
                ->value(Agenda::query()->count())
                ->description('Jumlah semua agenda')
                ->icon('heroicon-o-pencil-square'),

            Stat::make('Total Berita', 'TotalBerita')
                ->value(Berita::query()->count())
                ->description('Jumlah semua data berita')
                ->icon('heroicon-o-newspaper'),

            Stat::make('Jumlah download', 'jmldatadwnld')
                ->value(Download::query()->count())
                ->description('Jumlah data download')
                ->icon('heroicon-o-cloud-arrow-down'),

            Stat::make('Jumlah galeri', 'jumlahdatagaler')
                ->value(Galeri::query()->count())
                ->description('Jumlah semua data galeri')
                ->icon('heroicon-o-photo'),

            Stat::make('Jumlah Heading', 'JmlHeading')
                ->value(Heading::query()->count())
                ->description('Jumlah semua data heading')
                ->icon('heroicon-o-lifebuoy'),

            Stat::make('Jumlah kategori', 'jmlkategori')
                ->value(Kategori::query()->count())
                ->description('Jumlah semua data kategori')
                ->icon('heroicon-o-tag'),

            Stat::make('Jumlah kategori agenda', 'TotalAgenda')
                ->value(KategoriAgenda::query()->count())
                ->description('Jumlah semua data agenda')
                ->icon('heroicon-o-paper-airplane'),

            Stat::make('Jumlah kategori download', 'jmlktgdwn')
                ->value(KategoriDownload::query()->count())
                ->description('Jumlah semua data kategori download')
                ->icon('heroicon-o-inbox-arrow-down'),

            Stat::make('Jumlah kategori  galeri', 'jmlktggler')
                ->value(KategoriGaleri::query()->count())
                ->description('Jumlah semua data kategori galeri')
                ->icon('heroicon-o-film'),

            Stat::make('Jumlah kategori Staff', 'jmlktgstaff')
                ->value(KategoriStaff::query()->count())
                ->description('Jumlah semua data kategori staff')
                ->icon('heroicon-o-user-group'),

            Stat::make('Jumlah konfigurasi', 'jmlconfig')
                ->value(Konfigurasi::query()->count())
                ->description('Jumlah semua data konfigurasi')
                ->icon('heroicon-o-wrench-screwdriver'),

            Stat::make('Jumlah rekening', 'jmlrekening')
                ->value(Rekening::query()->count())
                ->description('Jumlah semua data rekening')
                ->icon('heroicon-o-credit-card'),

            Stat::make('Jumlah staff', 'jmlstaff')
                ->value(Staff::query()->count())
                ->description('Jumlah semua data staff')
                ->icon('heroicon-o-users'),

            Stat::make('Jumlah user', 'jmluser')
            ->value(Users::query()->count())
            ->description('Jumlah semua data user')
            ->icon('heroicon-o-user'),

            Stat::make('Jumlah video','jmlvideo')
            ->value(Video::query()->count())
            ->description('Jumlah semua data video')
            ->icon('heroicon-o-video-camera'),
        ];
    }
    protected int | string | array $columnSpan = 'full';

    protected function getColumns(): int
    {
        return 3;
    }
}
