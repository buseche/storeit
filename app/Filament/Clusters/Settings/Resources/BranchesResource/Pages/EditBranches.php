<?php

namespace App\Filament\Clusters\Settings\Resources\BranchesResource\Pages;

use App\Filament\Clusters\Settings\Resources\BranchesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBranches extends EditRecord
{
    protected static string $resource = BranchesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
