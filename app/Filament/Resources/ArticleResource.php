<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Forms\Components\TextInput::make('title')
                ->label('Judul')
                ->required()
                ->maxLength(255),
              Forms\Components\TextInput::make('author')
                ->label('Penulis')
                ->required()
                ->maxLength(255),
              Forms\Components\RichEditor::make('content')
                  ->label('Konten')
                  ->columnSpan('full')
                  ->required(),
              Forms\Components\Datepicker::make('date')
                  ->label('Tanggal')
                  ->required(),
              Forms\Components\Select::make('category_id')
                  ->label('Kategori')
                  ->required()
                  ->options(Category::all()->pluck('category', 'id'))
                  ->searchable(),
              Forms\Components\TagsInput::make('tags')
                  ->label('Tags')
                  ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
        //split

            ->columns([
              Tables\Columns\Layout\Split::make([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('author')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('content')->limit(100),
                Tables\Columns\TextColumn::make('date')->sortable()->searchable(),
                //category ambil dari table category dan ambil field category
                Tables\Columns\TextColumn::make('category.category')->sortable()->searchable(),
                Tables\Columns\TagsColumn::make('tags')->sortable()->searchable(),
              ])
            ])
            ->filters([
              //category
              SelectFilter::make('category_id')
                ->label('Kategori')
                ->options(Category::all()->pluck('category', 'id'))
                ->placeholder('Semua Kategori'),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}