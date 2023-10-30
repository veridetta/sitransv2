<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //title, banner gambar
                Forms\Components\TextInput::make('title')->autofocus()->required(),
                //url
                Forms\Components\TextInput::make('url')->autofocus()->required(),
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
                //pakai split untuk membagi kolom
                Tables\Columns\Layout\Split::make([
                    Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                    Tables\Columns\TextColumn::make('url')->sortable()->searchable(),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
