<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EditProfileResource\Pages;
use App\Filament\Resources\EditProfileResource\RelationManagers;
use App\Models\EditProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EditProfileResource extends Resource
{
    protected static ?string $model = EditProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEditProfiles::route('/'),
            'create' => Pages\CreateEditProfile::route('/create'),
            'view' => Pages\ViewEditProfile::route('/{record}'),
            'edit' => Pages\EditEditProfile::route('/{record}/edit'),
        ];
    }
}
