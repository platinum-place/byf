<?php

namespace App\Filament\Resources\Supplier\AgentResource\Pages;

use App\Filament\Resources\Supplier\AgentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;
use App\Filament\Imports\Customer\CustomerImporter;
use App\Filament\Exports\Customer\CustomerExporter;

class ListAgents extends ListRecords
{
    protected static string $resource = AgentResource::class;

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
