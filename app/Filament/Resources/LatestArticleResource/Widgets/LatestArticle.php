<?php

namespace App\Filament\Resources\LatestArticleResource\Widgets;

use App\Models\Article;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestArticle extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Article::query()
                    ->latest()
            )
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content')->limit(100),
                Tables\Columns\TextColumn::make('author')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('date')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug')->sortable()->searchable(),
            ]);
    }
}