<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShopContactResource\Pages;
use App\Models\ShopContact;
use Filament\Forms;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;

class ShopContactResource extends Resource
{
    protected static ?string $model = ShopContact::class;

    protected static ?string $navigationGroup = 'Contact Setting';

    protected static ?string $navigationIcon = 'heroicon-o-speakerphone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Group::make([
                            Forms\Components\TextInput::make('name')
                                ->required(),
                            Forms\Components\TextInput::make('title')
                                ->required(),
                            Forms\Components\TextInput::make('phone')
                                ->numeric()
                                ->mask(fn (Forms\Components\TextInput\Mask $mask) => $mask->pattern('+{855}(000)000-00-00'))
                                ->required(),
                            Forms\Components\TextInput::make('email')
                                ->email()
                                ->required(),
                        ])->columns(2),
                        Forms\Components\MarkdownEditor::make('detail')
                            ->required(),
                    ])->columnSpan(3),

                Forms\Components\Group::make([
                    Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\Card::make([
                                Toggle::make('is_public')->default(1)
                                    ->label('Public'),
                            ]),
                        ]),
                    Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\FileUpload::make('image')
                                ->imageCropAspectRatio('1:1')
                                ->imageResizeTargetWidth('550')
                                ->imageResizeTargetHeight('650')
                            ->image()
                            ->required(),
                        ]),
                ])->columnSpan(1),
            ])->columns(4);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('detail')->limit(22),
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListShopContacts::route('/'),
            'create' => Pages\CreateShopContact::route('/create'),
            'edit' => Pages\EditShopContact::route('/{record}/edit'),
        ];
    }
}
