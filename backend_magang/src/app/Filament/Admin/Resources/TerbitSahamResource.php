<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TerbitSahamResource\Pages;
use App\Filament\Admin\Resources\TerbitSahamResource\RelationManagers;
use App\Models\TerbitSaham;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TerbitSahamResource extends Resource
{
    protected static ?string $model = TerbitSaham::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('last_update')
                    ->required(),
                Forms\Components\TextInput::make('sumber')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('last_update')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sumber')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListTerbitSahams::route('/'),
            'create' => Pages\CreateTerbitSaham::route('/create'),
            'edit' => Pages\EditTerbitSaham::route('/{record}/edit'),
        ];
    }
}
