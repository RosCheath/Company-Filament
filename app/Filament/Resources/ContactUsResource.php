<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactUsResource\Pages;
use App\Models\ContactUs;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ContactUsResource extends Resource
{
    protected static ?string $model = ContactUs::class;

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationGroup = 'Contact Setting';

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\Group::make([
                        Forms\Components\TextInput::make('title')
                            ->required(),
                        Forms\Components\TextInput::make('location')
                            ->required(),
                    ])->columns(2),
                    Forms\Components\TextInput::make('map')
                        ->label('Map URL')
                        ->required(),
                ]),
                Forms\Components\FileUpload::make('contact_image')
                    ->columnSpan('full')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->toggleable()->limit(20),
                Tables\Columns\ImageColumn::make('contact_image')->toggleable(),
                Tables\Columns\TextColumn::make('location')->toggleable()->limit(20),
                Tables\Columns\TextColumn::make('map')->toggleable()
                    ->limit(20),
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
            'index' => Pages\ListContactUs::route('/'),
            //            'create' => Pages\CreateContactUs::route('/create'),
            //            'edit' => Pages\EditContactUs::route('/{record}/edit'),
        ];
    }
}
