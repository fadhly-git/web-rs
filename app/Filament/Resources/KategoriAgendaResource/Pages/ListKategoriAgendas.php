<?php

namespace App\Filament\Resources\KategoriAgendaResource\Pages;

use App\Filament\Resources\KategoriAgendaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriAgendas extends ListRecords
{
    protected static string $resource = KategoriAgendaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
