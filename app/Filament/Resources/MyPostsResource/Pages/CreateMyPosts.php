<?php

namespace App\Filament\Resources\MyPostsResource\Pages;

use App\Filament\Resources\MyPostsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMyPosts extends CreateRecord
{
    protected static string $resource = MyPostsResource::class;
}
