<?php

namespace App\Filament\Resources\KategoriDownloadResource\Pages;

use App\Filament\Resources\KategoriDownloadResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriDownload extends EditRecord
{
    protected static string $resource = KategoriDownloadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
