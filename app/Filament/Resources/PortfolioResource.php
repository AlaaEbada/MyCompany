<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Portfolios';

    protected static ?string $navigationGroup = 'Portfolio Management';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Project Title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, $state) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->label('Slug')
                    ->unique(ignorable: fn ($record) => $record)
                    ->required()
                    ->maxLength(255)
                    ->hint('Will be auto-generated if left blank'),

                RichEditor::make('description')
                    ->label('Description')
                    ->required()
                    ->dehydrateStateUsing(fn ($state) => strip_tags($state)),

                FileUpload::make('image')
                    ->label('Project Image')
                    ->image()
                    ->directory('portfolios')
                    ->required(),

                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable(),


            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('slug')
                    ->label('Slug')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime(),

                ImageColumn::make('image')
                ->label('Image')
                ->width('50px')
                ->height('50px')
                ->getStateUsing(fn ($record) => asset('storage/' . $record->image)),

        ])->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
