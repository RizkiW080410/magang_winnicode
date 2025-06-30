<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pangan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Admin\Resources\PanganResource\Pages;
use App\Filament\Admin\Resources\PanganResource\RelationManagers;

class PanganResource extends Resource
{
    protected static ?string $model = Pangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Management Data Pangan';

    protected static ?string $recordTitleAttribute = 'Pangan';

    protected static ?int $navigationSort = 8;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Pangan')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->columnSpanFull(),

                TextInput::make('harga')
                    ->label('Harga (Rp/kg)')
                    ->required()
                    ->numeric()
                    ->default(0),

                DatePicker::make('last_update')
                    ->label('Last Update')
                    ->required(),

                TextInput::make('sumber')
                    ->label('Sumber')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image')
                    ->label('Gambar')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('harga')
                    ->label('Harga (Rp)')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('sumber')
                    ->label('Sumber')
                    ->sortable(),

                TextColumn::make('last_update')
                    ->label('Last Update')
                    ->dateTime('d M Y H:i')
                    ->sortable(),

                ImageColumn::make('image')
                    ->label('Gambar'),
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
            'index' => Pages\ListPangans::route('/'),
            'create' => Pages\CreatePangan::route('/create'),
            'edit' => Pages\EditPangan::route('/{record}/edit'),
        ];
    }
}
