<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessageResource\Pages;
use App\Models\Message;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    public static function getPluralLabel(): ?string
    {
        return __('messages.messages');
    }
    public static function getNavigationLabel(): string
    {
        return __('messages.messages');
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('messages.name')) // Translated label
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label(__('messages.email')) // Translated label
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('message')
                    ->label(__('messages.message')) // Translated label
                    ->limit(50)
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('messages.submitted_at')) // Translated label
                    ->dateTime('F j, Y, g:i a')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])->headerActions([]); // Remove the "Create New" button
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMessages::route('/'), // Only the list page will be accessible
        ];
    }
}
