<?php

namespace App\Filament\Resources\SideBannerResource\Pages;

use App\Filament\Resources\SideBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSideBanners extends ListRecords
{
    protected static string $resource = SideBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
