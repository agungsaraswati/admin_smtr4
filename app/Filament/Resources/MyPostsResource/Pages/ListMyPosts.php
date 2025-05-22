<?php

namespace App\Filament\Resources\MyPostsResource\Pages;

use App\Filament\Resources\MyPostsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMyPosts extends ListRecords
{
    protected static string $resource = MyPostsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
