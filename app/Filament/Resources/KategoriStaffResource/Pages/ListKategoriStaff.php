<?php

namespace App\Filament\Resources\KategoriStaffResource\Pages;

use App\Filament\Resources\KategoriStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriStaff extends ListRecords
{
    protected static string $resource = KategoriStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
