<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopbarResource\Pages;
use App\Models\Topbar;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class TopbarResource extends Resource
{
    protected static ?string $model = Topbar::class;

    protected static ?string $navigationGroup = 'Front Settings';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('phone'),
                    Forms\Components\TextInput::make('email'),
                    Forms\Components\Select::make('date_start')
                        ->options([
                            'Monday' => 'Monday',
                            'Tuesday' => 'Tuesday',
                            'Wednesday' => 'Wednesday',
                            'Thursday' => 'Thursday',
                            'Friday' => 'Friday',
                            'Saturday' => 'Saturday',
                            'Sunday' => 'Sunday',
                        ]),
                    Forms\Components\Select::make('date_end')
                        ->options([
                            'Monday' => 'Monday',
                            'Tuesday' => 'Tuesday',
                            'Wednesday' => 'Wednesday',
                            'Thursday' => 'Thursday',
                            'Friday' => 'Friday',
                            'Saturday' => 'Saturday',
                            'Sunday' => 'Sunday',
                        ]),
                    Forms\Components\Select::make('time_start')
                        ->options([
                            '1:00 AM' => '1:00 AM',
                            '1:30 AM' => '1:30 AM',
                            '2:00 AM' => '2:00 AM',
                            '2:30 AM' => '2:30 AM',
                            '3:00 AM' => '3:00 AM',
                            '3:30 AM' => '3:30 AM',
                            '4:00 AM' => '4:00 AM',
                            '4:30 AM' => '4:30 AM',
                            '5:00 AM' => '5:00 AM',
                            '5:30 AM' => '5:30 AM',
                            '6:00 AM' => '6:00 AM',
                            '6:30 AM' => '6:30 AM',
                            '7:00 AM' => '7:00 AM',
                            '7:30 AM' => '7:30 AM',
                            '8:00 AM' => '8:00 AM',
                            '8:30 AM' => '8:30 AM',
                            '9:00 AM' => '9:00 AM',
                            '9:30 AM' => '9:30 AM',
                            '10:00 AM' => '10:00 AM',
                            '10:30 AM' => '10:30 AM',
                            '11:00 AM' => '11:00 AM',
                            '11:30 AM' => '11:30 AM',
                            '12:00 AM' => '12:00 AM',
                            '12:30 AM' => '12:30 AM',

                            '1:00 PM' => '1:00 PM',
                            '1:30 PM' => '1:30 PM',
                            '2:00 PM' => '2:00 PM',
                            '2:30 PM' => '2:30 PM',
                            '3:00 PM' => '3:00 PM',
                            '3:30 PM' => '3:30 PM',
                            '4:00 PM' => '4:00 PM',
                            '4:30 PM' => '4:30 PM',
                            '5:00 PM' => '5:00 PM',
                            '5:30 PM' => '5:30 PM',
                            '6:00 PM' => '6:00 PM',
                            '6:30 PM' => '6:30 PM',
                            '7:00 PM' => '7:00 PM',
                            '7:30 PM' => '7:30 PM',
                            '8:00 PM' => '8:00 PM',
                            '8:30 PM' => '8:30 PM',
                            '9:00 PM' => '9:00 PM',
                            '9:30 PM' => '9:30 PM',
                            '10:00 PM' => '10:00 PM',
                            '10:30 PM' => '10:30 PM',
                            '11:00 PM' => '11:00 PM',
                            '11:30 PM' => '11:30 PM',
                            '12:00 PM' => '12:00 PM',
                            '12:30 PM' => '12:30 PM',

                        ])
                        ->searchable(),
                    Forms\Components\Select::make('time_end')
                        ->options([
                            '1:00 AM' => '1:00 AM',
                            '1:30 AM' => '1:30 AM',
                            '2:00 AM' => '2:00 AM',
                            '2:30 AM' => '2:30 AM',
                            '3:00 AM' => '3:00 AM',
                            '3:30 AM' => '3:30 AM',
                            '4:00 AM' => '4:00 AM',
                            '4:30 AM' => '4:30 AM',
                            '5:00 AM' => '5:00 AM',
                            '5:30 AM' => '5:30 AM',
                            '6:00 AM' => '6:00 AM',
                            '6:30 AM' => '6:30 AM',
                            '7:00 AM' => '7:00 AM',
                            '7:30 AM' => '7:30 AM',
                            '8:00 AM' => '8:00 AM',
                            '8:30 AM' => '8:30 AM',
                            '9:00 AM' => '9:00 AM',
                            '9:30 AM' => '9:30 AM',
                            '10:00 AM' => '10:00 AM',
                            '10:30 AM' => '10:30 AM',
                            '11:00 AM' => '11:00 AM',
                            '11:30 AM' => '11:30 AM',
                            '12:00 AM' => '12:00 AM',
                            '12:30 AM' => '12:30 AM',

                            '1:00 PM' => '1:00 PM',
                            '1:30 PM' => '1:30 PM',
                            '2:00 PM' => '2:00 PM',
                            '2:30 PM' => '2:30 PM',
                            '3:00 PM' => '3:00 PM',
                            '3:30 PM' => '3:30 PM',
                            '4:00 PM' => '4:00 PM',
                            '4:30 PM' => '4:30 PM',
                            '5:00 PM' => '5:00 PM',
                            '5:30 PM' => '5:30 PM',
                            '6:00 PM' => '6:00 PM',
                            '6:30 PM' => '6:30 PM',
                            '7:00 PM' => '7:00 PM',
                            '7:30 PM' => '7:30 PM',
                            '8:00 PM' => '8:00 PM',
                            '8:30 PM' => '8:30 PM',
                            '9:00 PM' => '9:00 PM',
                            '9:30 PM' => '9:30 PM',
                            '10:00 PM' => '10:00 PM',
                            '10:30 PM' => '10:30 PM',
                            '11:00 PM' => '11:00 PM',
                            '11:30 PM' => '11:30 PM',
                            '12:00 PM' => '12:00 PM',
                            '12:30 PM' => '12:30 PM',

                        ])
                        ->searchable(),
                    Forms\Components\TextInput::make('facebook_link'),
                    Forms\Components\TextInput::make('telegram_link'),
                    Forms\Components\TextInput::make('wechat_link'),
                    Forms\Components\TextInput::make('line_link'),
                ])
                    ->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('email')->toggleable(),
                Tables\Columns\TextColumn::make('date_start')->label('Start Work'),
                Tables\Columns\TextColumn::make('date_end')->label('End Work'),
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
            'index' => Pages\ListTopbars::route('/'),
            //            'create' => Pages\CreateTopbar::route('/create'),
            //            'edit' => Pages\EditTopbar::route('/{record}/edit'),
        ];
    }
}
