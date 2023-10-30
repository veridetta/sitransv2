<?php

namespace App\Filament\Resources\SideBannerResource\Pages;

use App\Filament\Resources\SideBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSideBanner extends EditRecord
{
    protected static string $resource = SideBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
