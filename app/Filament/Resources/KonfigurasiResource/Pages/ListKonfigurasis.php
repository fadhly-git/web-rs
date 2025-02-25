<?php

namespace App\Filament\Resources\KonfigurasiResource\Pages;

use App\Filament\Resources\KonfigurasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKonfigurasis extends ListRecords
{
    protected static string $resource = KonfigurasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
