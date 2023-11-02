<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicationResource\Pages;
use App\Filament\Resources\ApplicationResource\RelationManagers;
use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Forms\Components\TextInput::make('title')->autofocus()->required(),
              TextInput::make('url')->required(),
              //jenis option "Public" / "Intern"
              Forms\Components\Select::make('jenis')->options([
                'Public' => 'Public',
                'Intern' => 'Intern',
              ])->required(),
              Forms\Components\FileUpload::make('image')
                  ->label('Gambar')
                  ->required()
                  ->directory('images')
                  ->columnSpan('full')
                  ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //pakai split
                Tables\Columns\Layout\Split::make([
                  Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                  Tables\Columns\TextColumn::make('url')->sortable()->searchable(),
                  Tables\Columns\TextColumn::make('jenis')->sortable()->searchable(),
                  Tables\Columns\ImageColumn::make('image')->circular(),
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
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }
}
