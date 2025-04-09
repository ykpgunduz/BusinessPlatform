<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Slider;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SliderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SliderResource\RelationManagers;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Slider Kısmı';

    protected static ?string $modelLabel = 'Slider';

    protected static ?string $pluralModelLabel = 'Slider Kısmı';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Slider Başlığı')
                    ->required(),
                TextInput::make('button_text')
                    ->label('Slider Buton Metni')
                    ->default('Daha Fazla Bilgi'),
                Textarea::make('description')
                    ->label('Slider Açıklaması')
                    ->rows(3)
                    ->required(),
                FileUpload::make('image')
                    ->label('Slider Resmi')
                    ->image()
                    ->required(),
                TextInput::make('link')
                    ->label('Slider Linki')
                    ->required(),
                TextInput::make('sort')
                    ->label('Slider Sırası')
                    ->required(),
                Toggle::make('active')
                    ->label('Slider Aktiflik Durumu')
                    ->default(true)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
