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

    protected static ?string $navigationLabel = 'Users';

    protected static ?string $navigationGroup = 'User Management';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('Name'),
            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->label('Email'),
            Forms\Components\Select::make('is_admin')
                ->options([
                    '1' => 'Admin',
                    '0' => 'User',
                ])->required()
                ->label('Role'),
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
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('is_admin')->searchable()->label('Role')
                ->formatStateUsing(fn (string $state): string => $state === '1' ? 'Admin' : 'User')->badge()
                ->color(fn (string $state): string => match ($state) {
                    '0' => 'success',
                    '1' => 'danger',
                }),

                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('users_only')
                    ->query(fn (Builder $query) => $query->where('is_admin', '0'))
                    ->label('User Role'),
            
                Tables\Filters\Filter::make('admins_only')
                    ->query(fn (Builder $query) => $query->where('is_admin', '1'))
                    ->label('Admin Role'),
        
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
