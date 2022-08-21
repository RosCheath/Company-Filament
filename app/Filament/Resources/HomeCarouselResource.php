<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeCarouselResource\Pages;
use App\Models\Home_Carousel;
use Filament\Forms;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;

class HomeCarouselResource extends Resource
{
    protected static ?string $model = Home_Carousel::class;

    protected static ?string $navigationGroup = 'Home Page Settings';

    protected static ?string $navigationIcon = 'heroicon-o-photograph';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('title')
                        ->required(),
                    Forms\Components\FileUpload::make('image')
                        ->required(),
                    Toggle::make('is_public')->default(1)
                        ->label('Public')
                        ->onIcon('heroicon-s-eye')
                        ->offIcon('heroicon-s-eye-off'),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title'),
                BooleanColumn::make('is_public')
                    ->label('Is Public')
                    ->trueIcon('heroicon-s-eye')
                    ->falseIcon('heroicon-s-eye-off'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListHomeCarousels::route('/'),
            //            'create' => Pages\CreateHomeCarousel::route('/create'),
            //            'edit' => Pages\EditHomeCarousel::route('/{record}/edit'),
        ];
    }
}
