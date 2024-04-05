<?php

namespace App\Filament\Resources\Supplier\ProductResource\Pages;

use App\Filament\Resources\Supplier\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;
use App\Filament\Imports\Customer\CustomerImporter;
use App\Filament\Exports\Customer\CustomerExporter;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ImportAction::make()
            ->label("Importar")
            ->importer(CustomerImporter::class),
        ExportAction::make()
            ->label("Exportar")
            ->exporter(CustomerExporter::class)
        ];
    }
}
