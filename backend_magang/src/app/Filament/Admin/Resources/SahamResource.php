<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SahamResource\Pages;
use App\Filament\Admin\Resources\SahamResource\RelationManagers;
use App\Models\Saham;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SahamResource extends Resource
{
    protected static ?string $model = Saham::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('terbit_saham_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('category_saham_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('harga_perhari')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('persen_perhari')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('icon')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('terbit_saham_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category_saham_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga_perhari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('persen_perhari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('icon')
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
            'index' => Pages\ListSahams::route('/'),
            'create' => Pages\CreateSaham::route('/create'),
            'edit' => Pages\EditSaham::route('/{record}/edit'),
        ];
    }
}
