<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function getNavigationGroup(): ?string
    {
        return __('messages.post_management');

    }

    public static function getModelLabel(): string
    {
        return __('messages.post');
    }

    public static function getPluralLabel(): ?string
    {
        return __('messages.posts');
    }
    public static function getNavigationLabel(): string
    {
        return __('messages.posts');
    }



    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label(__('messages.post_title'))
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, $state) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->label(__('messages.slug'))
                    ->unique(ignorable: fn ($record) => $record)
                    ->required()
                    ->maxLength(255)
                    ->hint(__('messages.slug_hint')),

                RichEditor::make('body')
                    ->label(__('messages.content'))
                    ->required()
                    ->dehydrateStateUsing(fn ($state) => strip_tags($state)),

                FileUpload::make('image')
                    ->label(__('messages.post_image'))
                    ->image()
                    ->directory('posts')
                    ->required(),

                Select::make('category_id')
                    ->label(__('messages.category'))
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
                    ->label(__('id'))
                    ->sortable()
                    ->searchable(),

                TextColumn::make('title')
                    ->label(__('messages.title'))
                    ->sortable()
                    ->searchable(),

                TextColumn::make('slug')
                    ->label(__('messages.slug'))
                    ->sortable()
                    ->searchable(),

                TextColumn::make('category.name')
                    ->label(__('messages.category'))
                    ->sortable()
                    ->searchable(),

                TextColumn::make('user.name')
                    ->label(__('messages.author'))
                    ->sortable()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label(__('messages.created_at'))
                    ->dateTime(),

                ImageColumn::make('image')
                    ->label(__('messages.image'))
                    ->width('50px')
                    ->height('50px')
                    ->getStateUsing(fn ($record) => asset('storage/' . $record->image)),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
