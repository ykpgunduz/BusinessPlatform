<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\PostResource\Pages;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Paylaşımlar';

    protected static ?string $modelLabel = 'Paylaşım';

    protected static ?string $pluralModelLabel = 'Paylaşımlar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Paylaşım Başlığı')
                    ->required()
                    ->maxLength(255)
                    ->live(debounce: 500)
                    ->afterStateUpdated(function (?string $state, Forms\Set $set) {
                        if ($state) {
                            $set('slug', str()->slug($state));
                        }
                    })
                    ->required(),
                TextInput::make('slug')
                    ->label('Paylaşım Slug')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->maxLength(255),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Kategorisi')
                    ->required(),
                FileUpload::make('image')
                    ->label('Paylaşım Resmi')
                    ->image(),
                Textarea::make('content')
                    ->label('Paylaşım İçeriği')
                    ->columnSpanFull()
                    ->rows(7)
                    ->required(),
                Forms\Components\Toggle::make('active')
                    ->label('Aktiflik Durumu')
                    ->default(true)
                    ->onColor('success'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Paylaşım Başlığı')
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Paylaşım Slug')
                    ->prefix('/'),
                TextColumn::make('category.name')
                    ->label('Kategorisi')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->label('Aktiflik')
                    ->icon(fn (bool $state): string => $state ? 'heroicon-o-check-circle' : 'heroicon-o-x-circle')
                    ->color(fn (bool $state): string => $state ? 'success' : 'danger')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label(''),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
