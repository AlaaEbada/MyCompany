<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function getNavigationGroup(): ?string
    {
        return __('messages.post_management');

    }


    public static function getModelLabel(): string
    {
        return __('messages.one_category');
    }

    public static function getPluralLabel(): ?string
    {
        return __('messages.categories');
    }

    public static function getNavigationLabel(): string
    {
        return __('messages.categories');
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label(__('messages.category_name')) // Translated label
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, $state) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->label(__('messages.slug')) // Translated label
                    ->unique(ignorable: fn ($record) => $record)
                    ->required()
                    ->maxLength(255)
                    ->hint(__('messages.slug_hint', [], 'en')), // You can add a translation for this hint if necessary

                Textarea::make('description')
                    ->label(__('messages.description')) // Translated label
                    ->maxLength(500),

                // Color picker for text color
                ColorPicker::make('text_color')
                    ->label(__('messages.text_color')), // Translated label

                // Color picker for background color
                ColorPicker::make('bg_color')
                    ->label(__('messages.bg_color')), // Translated label
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label(__('id'))
                    ->sortable()
                    ->searchable(),

                TextColumn::make('name')
                    ->label(__('messages.category_name')) // Translated label
                    ->sortable()
                    ->searchable(),

                TextColumn::make('slug')
                    ->label(__('messages.slug')) // Translated label
                    ->sortable()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label(__('messages.created_at')) // Translated label
                    ->dateTime(),
            ])
            ->filters([
                // Add custom filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Add relations if needed
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
