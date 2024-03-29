<?php

namespace App\Filament\Columns;

use Filament\Tables;

class DateAtColumns
{
    public static function columns($array = [])
    {
        return array_merge($array, [
            Tables\Columns\TextColumn::make('created_at')
                ->label(__('app.created_at'))
                ->dateTime('d/m/Y h:i A')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->label(__('app.updated_at'))
                ->dateTime('d/m/Y h:i A')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('deleted_at')
                ->label(__('app.deleted_at'))
                ->dateTime('d/m/Y h:i A')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ]);
    }
}
