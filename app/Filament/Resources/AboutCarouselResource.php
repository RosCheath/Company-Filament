<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutCarouselResource\Pages;
use App\Models\AboutCarousel;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class AboutCarouselResource extends Resource
{
    protected static ?string $model = AboutCarousel::class;

    protected static ?string $navigationGroup = 'AboutUs Page Settings';

    protected static ?string $navigationIcon = 'heroicon-o-photograph';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\FileUpload::make('image'),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAboutCarousels::route('/'),
            //            'create' => Pages\CreateAboutCarousel::route('/create'),
            //            'edit' => Pages\EditAboutCarousel::route('/{record}/edit'),
        ];
    }
}
