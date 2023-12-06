<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SideBannerResource\Pages;
use App\Filament\Resources\SideBannerResource\RelationManagers;
use App\Models\SideBanner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SideBannerResource extends Resource
{
    protected static ?string $model = SideBanner::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Halaman Statis';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel="Side Banner";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //title, banner gambar
                Forms\Components\TextInput::make('title')->autofocus()->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->required()
                    ->columnSpan('full')
                    ->directory('images')
                    ->visibility('public')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
              Tables\Columns\Layout\Split::make([
                  Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                  Tables\Columns\ImageColumn::make('image'),
              ]),
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
            'index' => Pages\ListSideBanners::route('/'),
            'create' => Pages\CreateSideBanner::route('/create'),
            'edit' => Pages\EditSideBanner::route('/{record}/edit'),
        ];
    }
}
