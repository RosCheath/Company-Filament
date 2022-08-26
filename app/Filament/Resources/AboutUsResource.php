<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUsResource\Pages;
use App\Models\AboutUs;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Model;

class AboutUsResource extends Resource
{
    protected static ?string $model = AboutUs::class;

    protected static ?int $navigationSort = -1;

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'detail', 'description'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'Title' => $record->title,
            'Detail' => $record->slug,
            'Description' => $record->description,
        ];
    }

    protected static ?string $navigationGroup = 'AboutUs Page Settings';

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Group::make([
                            Forms\Components\Card::make([
                                Forms\Components\TextInput::make('title')->required(),
                                Forms\Components\TextInput::make('detail')->maxLength(40)
                                    ->required(),
                                Forms\Components\RichEditor::make('description')
                                    ->required(),
                            ]),
                        ])->columnSpan([
                            12,
                            'lg' => 9,
                        ]),

                        Forms\Components\Card::make([
                            Forms\Components\FileUpload::make('image')
                                ->image()
                                ->required(),
                        ])->columnSpan([
                            12,
                            'lg' => 3,
                        ]),
                    ])->columns(12),

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('detail'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAboutUs::route('/'),
            //            'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}
