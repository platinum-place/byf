<?php

namespace App\Filament\Resources\Supplier\SupplierResource\Pages;

use App\Filament\Resources\Supplier\SupplierResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;
use App\Filament\Imports\Customer\CustomerImporter;
use App\Filament\Exports\Customer\CustomerExporter;

class ListSuppliers extends ListRecords
{
    protected static string $resource = SupplierResource::class;

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
