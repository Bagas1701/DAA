<?php

namespace App\Filament\Admin\Resources\MenuRestoranResource\Pages;

use App\Filament\Admin\Resources\MenuRestoranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenuRestoran extends EditRecord
{
    protected static string $resource = MenuRestoranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
