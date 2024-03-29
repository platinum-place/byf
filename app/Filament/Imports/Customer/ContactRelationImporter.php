<?php

namespace App\Filament\Imports\Customer;

use App\Enums\Status;
use App\Models\Customer\Contact;
use Filament\Actions\Imports\Importer;
use Filament\Forms\Components\Checkbox;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Models\Import;
use App\Filament\Imports\shared\ImportTrait;

class ContactRelationImporter extends Importer
{
    use ImportTrait;

    protected static ?string $model = Contact::class;

    public static function getColumns(): array
    {
        return \App\Filament\Columns\ImportContactColumns::getColumns();
    }

    public function resolveRecord(): ?Contact
    {
        $contact = match (!empty($this->options['update_existing'])) {
            true => Contact::firstOrNew([
                'name' => $this->data['name'],
            ]),
            default => new Contact(),
        };

        $contact->customer_id = $this->options['customer_id'];
        $contact->status = Status::active;

        return $contact;
    }
}
