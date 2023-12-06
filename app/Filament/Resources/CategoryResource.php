<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $navigationGroup = 'Berita';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel="Kategori";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('category')
                    ->label('Kategori')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->columnSpan('full')
                    ->maxLength(500),
                    //gambar file upload
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->required()
                    ->columnSpan('full')
                    ->directory('images')
                    ->visibility('public')
                    ->image(),
                Toggle::make('is_info')
                    ->label('Tetapkan sebagai Info Berita di Beranda')
                    ->onColor('success')
                    ->offColor('danger'),
                Toggle::make('is_public')
                    ->label('Tetapkan Kategori Informasi Publik')
                    ->hint('Kategori ini akan ditampilkan di halaman Informasi Publik juga dibagian top menu')
                    ->onColor('success')
                    ->offColor('danger'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
              Tables\Columns\Layout\Split::make([
                Tables\Columns\TextColumn::make('category')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('description')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                ToggleColumn::make('is_info')
                ->label('Info Satker'),
                ToggleColumn::make('is_public')
                ->onColor('success')
                ->label('Publik Informasi'),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
