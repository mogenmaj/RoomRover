<?php

namespace App\Filament\Resources;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\RoomcategoryResource\Pages;
use App\Filament\Resources\RoomcategoryResource\RelationManagers;
use App\Models\Roomcategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoomcategoryResource extends Resource
{
    protected static ?string $model = Roomcategory::class;
    public static function getLabel(): string
    {
        return __('roomcategory');
    }
    public static function getNavigationLabel(): string
    {
        return __('roomcategory');
    }
    protected static ?string $navigationGroup= 'System Management';

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('label')->required()->label('Category name'),
              
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('label'),
                          ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListRoomcategories::route('/'),
            'create' => Pages\CreateRoomcategory::route('/create'),
            'edit' => Pages\EditRoomcategory::route('/{record}/edit'),
        ];
    }
}
