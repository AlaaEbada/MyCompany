<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';


    public static function getPluralLabel(): ?string
    {
        return __('messages.user');
    }

    public static function getModelLabel(): string
    {
        return __('messages.users');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('messages.user_navigation_group');

    }

    public static function getNavigationLabel(): string
    {
        return __('messages.users');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label(__('messages.name')),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->label(__('messages.email')),
                Forms\Components\Select::make('is_admin')
                    ->options([
                        '1' => __('messages.admin'),
                        '0' => __('messages.user'),
                    ])->required()
                    ->label(__('messages.role')),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->revealable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable()->label(__('messages.name')),
                Tables\Columns\TextColumn::make('email')->searchable()->label(__('messages.email')),
                Tables\Columns\TextColumn::make('is_admin')->searchable()->label(__('messages.role'))
                    ->formatStateUsing(fn (string $state): string => $state === '1' ? __('messages.admin') : __('messages.user'))->badge()
                    ->color(fn (string $state): string => match ($state) {
                        '0' => 'success',
                        '1' => 'danger',
                    }),

                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->label(__('messages.created_at')),
            ])
            ->filters([
                Tables\Filters\Filter::make('users_only')
                    ->query(fn (Builder $query) => $query->where('is_admin', '0'))
                    ->label(__('messages.user')),
                Tables\Filters\Filter::make('admins_only')
                    ->query(fn (Builder $query) => $query->where('is_admin', '1'))
                    ->label(__('messages.admin')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
