<?php

namespace App\Filament\Resources\Customer\ContactResource\Pages;

use Filament\Actions;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Imports\Customer\ContactImporter;

use App\Filament\Resources\Customer\ContactResource;

use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;
use App\Filament\Imports\Customer\CustomerImporter;
use App\Filament\Exports\Customer\CustomerExporter;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

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
