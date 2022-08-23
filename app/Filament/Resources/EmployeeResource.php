<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'title', 'phone'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'Name' => $record->name,
            'Title' => $record->title,
            'Phone' => $record->phone,
        ];
    }

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\Hidden::make('user_id')->default(Auth::id()),
                                Forms\Components\TextInput::make('name')->required(),
                                Forms\Components\TextInput::make('title')->required(),
                                Forms\Components\TextInput::make('phone')
                                    ->numeric()
                                    ->mask(fn (Forms\Components\TextInput\Mask $mask) => $mask->pattern('+{855}(000)000-00-00'))
                                    ->required(),
                                Forms\Components\Select::make('sex')
                                    ->options([
                                        '0' => 'Male',
                                        '1' => 'Female',
                                    ])->required(),
                                Forms\Components\TextInput::make('address')->required(),
                                Forms\Components\TextInput::make('salary')
                                    ->mask(fn (Forms\Components\TextInput\Mask $mask) => $mask->money('$', ',', 2))
                                    ->required(),
                            ])->columns(2),

                        Forms\Components\Card::make()
                            ->schema([
                                DatePicker::make('bd')
                                    ->minDate(now()->subYears(22))
                                    ->maxDate(now())
                                ->required(),
                                DatePicker::make('started')->required(),
                            ]),
                    ])->columnSpan(2),

                Forms\Components\Card::make()
                    ->schema([
                        FileUpload::make('cv')->acceptedFileTypes(['application/pdf', 'docx']),
                        FileUpload::make('image'),
                    ])->columnSpan(1),

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('sex')
                    ->enum([
                        '0' => 'Male',
                        '1' => 'Female',
                    ]),
                Tables\Columns\TextColumn::make('started')->date('d M Y'),
                Tables\Columns\TextColumn::make('salary')->money('USD', ',', 2),

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
            ]);
    }

    public static function getWidgets(): array
    {
        return [
            EmployeeResource\Widgets\EmployeeOverview::class,
        ];
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'view' => Pages\ViewEmployee::route('/{record}'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
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
