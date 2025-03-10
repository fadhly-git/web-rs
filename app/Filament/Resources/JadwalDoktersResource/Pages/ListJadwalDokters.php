<?php

namespace App\Filament\Resources\JadwalDoktersResource\Pages;

use App\Filament\Resources\JadwalDoktersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalDokters extends ListRecords
{
    protected static string $resource = JadwalDoktersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
