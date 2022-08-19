<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedResource\Pages;

use App\Models\Feed;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class FeedResource extends Resource
{
    protected static ?string $model = Feed::class;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationIcon = 'heroicon-o-rss';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Group::make([
                            TextInput::make('title')
                                ->reactive()
                                ->afterStateUpdated(function (Closure $set, $state) {
                                    $set('slug', Str::slug($state));
                                })->required(),
                            TextInput::make('slug')
                                ->disabled()
                                ->required(),
                        ])->columns(2),
                        Forms\Components\FileUpload::make('image')
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->required(),
                    ])->columnSpan([
                        12,
                        'lg' => 10,
                    ]),

                Group::make([
                    Card::make([
                        Placeholder::make('created_at')
                            ->label('Created at'),
                        Placeholder::make('updated_at')
                            ->label('Last Updated')
                    ]),
                    Card::make([
                        Toggle::make('is_public')
//                            ->inline(false)
                            ->label('Public')
                            ->onIcon('heroicon-s-lightning-bolt')
                            ->offIcon('heroicon-s-user')
                    ])
                ])
                    ->columnSpan([
                        12,
                        'lg' => 2,
                    ]),
            ])->columns(12);


    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->sortable(),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable()->limit(15),
                TextColumn::make('slug')
                    ->limit(20)
                    ->searchable(),

                BooleanColumn::make('is_public')
                    ->label('Is Public')
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                SelectFilter::make('is_public')
                    ->options([
                        '1' => 'Published',
                        '0' => 'Un-published'
                    ]),
            ])
            ->actions([
                Tables\Columns\BooleanColumn::make('deleted_at')
                    ->trueColor('danger')
                    ->trueIcon('heroicon-o-exclamation-circle'),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            'index' => Pages\ListFeeds::route('/'),
            'create' => Pages\CreateFeed::route('/create'),
            'view' => Pages\ViewFeeds::route('/{record}'),
            'edit' => Pages\EditFeed::route('/{record}/edit'),
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
