<?php

namespace App\Filament\Resources\KategoriDownloadResource\Pages;

use App\Filament\Resources\KategoriDownloadResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriDownloads extends ListRecords
{
    protected static string $resource = KategoriDownloadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
