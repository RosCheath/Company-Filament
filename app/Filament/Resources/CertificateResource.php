<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CertificateResource\Pages;
use App\Filament\Resources\CertificateResource\RelationManagers;
use App\Models\Certificate;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CertificateResource extends Resource
{
    protected static ?string $model = Certificate::class;

    protected static ?string $navigationGroup = 'AboutUs Page Settings';

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->columnSpan('full')
                ->helperText('Optional'),
                Forms\Components\RichEditor::make('title')->columnSpan('full')
                    ->helperText('Optional'),
                Forms\Components\FileUpload::make('image')
                    ->columnSpan('full')
                ->image()
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('title')
                    ->html()
                    ->limit(30),
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListCertificates::route('/'),
//            'create' => Pages\CreateCertificate::route('/create'),
//            'edit' => Pages\EditCertificate::route('/{record}/edit'),
        ];
    }
}
