<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedResource\Pages;
use App\Filament\Resources\FeedResource\Widgets\FeedOverview;
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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\TemporaryUploadedFile;

class FeedResource extends Resource
{
    protected static ?string $model = Feed::class;

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'slug', 'description'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'Title' => $record->title,
            'Slug' => $record->slug,
            'Description' => $record->description,
        ];
    }

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 0 ? 'primary' : 'danger';
    }

    protected static ?string $navigationLabel = 'Feeds Post';

    protected static ?string $navigationIcon = 'heroicon-o-rss';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Group::make([
                            Forms\Components\Hidden::make('user_id')->default(Auth::id()),
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
                            ->imageCropAspectRatio('1:1')
                            ->imageResizeTargetWidth('640')
                            ->imageResizeTargetHeight('480')
//                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file
//                            ): string {
//                                $fileName = $file->hashName();
//                                $name = explode('.', $fileName);
//
//                                return (string) str('images/FeesPost'.date_format(now(), 'FY').$name[0]);
//                            })
                            ->image()
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
                            ->label('Last Updated'),
                    ]),
                    Card::make([
                        Toggle::make('is_public')->default(1)
                            ->label('Public')
                            ->onIcon('heroicon-s-eye')
                            ->offIcon('heroicon-s-eye-off'),
                    ]),
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
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable()->limit(15),
                TextColumn::make('slug')
                    ->limit(20)
                    ->searchable(),

                BooleanColumn::make('is_public')
                    ->label('Is Public')
                    ->trueIcon('heroicon-s-eye')
                    ->falseIcon('heroicon-s-eye-off'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                SelectFilter::make('is_public')
                    ->options([
                        '1' => 'Published',
                        '0' => 'Un-published',
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

    public static function getWidgets(): array
    {
        return [
            FeedOverview::class,
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
