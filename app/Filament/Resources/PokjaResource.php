<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PokjaResource\Pages;
use App\Filament\Resources\PokjaResource\RelationManagers;
use App\Models\Pokja;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PokjaResource extends Resource
{
    protected static ?string $model = Pokja::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-3';
    protected static ?string $navigationGroup = 'Halaman Navigasi';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel="Navigasi Pokja";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->label('Url')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
              Tables\Columns\Layout\Split::make([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('url')->sortable()->searchable(),
              ])
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
            'index' => Pages\ListPokjas::route('/'),
            'create' => Pages\CreatePokja::route('/create'),
            'edit' => Pages\EditPokja::route('/{record}/edit'),
        ];
    }
}
