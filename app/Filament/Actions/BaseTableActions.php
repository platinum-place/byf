<?php

namespace App\Filament\Actions;

use Filament\Tables;

class BaseTableActions
{
    public static function actions($array = [])
    {
        return array_merge($array, [
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
            Tables\Actions\ForceDeleteAction::make(),
            Tables\Actions\RestoreAction::make(),
        ]);
    }

    public static function bulkActions($array = [])
    {
        return array_merge($array, [
            Tables\Actions\DeleteBulkAction::make(),
            Tables\Actions\ForceDeleteBulkAction::make(),
            Tables\Actions\RestoreBulkAction::make(),
        ]);
    }
}
