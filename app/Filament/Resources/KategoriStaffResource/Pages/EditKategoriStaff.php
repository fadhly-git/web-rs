<?php

namespace App\Filament\Resources\KategoriStaffResource\Pages;

use App\Filament\Resources\KategoriStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriStaff extends EditRecord
{
    protected static string $resource = KategoriStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
