<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'description'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'Title' => $record->title,
            'Description' => $record->description,
        ];
    }

    protected static ?string $navigationGroup = 'Service Settings';

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make([
                    Forms\Components\Card::make([
                        Forms\Components\TextInput::make('title')->required(),
                        Forms\Components\MarkdownEditor::make('description')->required(),
                    ]),
                ])->columnSpan([
                    12,
                    'lg' => 9,
                ]),
                Forms\Components\Group::make([
                    Card::make([
                        Toggle::make('is_public')->default(1)
                            ->label('Public')
                            ->onIcon('heroicon-s-eye')
                            ->offIcon('heroicon-s-eye-off'),
                    ]),
                    Forms\Components\Card::make([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->required(),
                    ]),
                ])->columnSpan([
                    12,
                    'lg' => 3,
                ]),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('description')->searchable(),
                BooleanColumn::make('is_public')
                    ->label('Is Public')
                    ->trueIcon('heroicon-s-eye')
                    ->falseIcon('heroicon-s-eye-off'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
