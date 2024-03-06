<?php

namespace App\Filament\Clusters\Storage\Resources\StorageResource\Pages;

use App\Filament\Clusters\Storage\Resources\StorageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStorage extends EditRecord
{
    protected static string $resource = StorageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
