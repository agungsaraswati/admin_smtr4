<?php

namespace App\Filament\Resources\MyPostsResource\Pages;

use App\Filament\Resources\MyPostsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMyPosts extends EditRecord
{
    protected static string $resource = MyPostsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
