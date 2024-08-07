<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationDetailsResource\Pages;
use App\Filament\Resources\EducationDetailsResource\RelationManagers;
use App\Models\EducationDetails;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EducationDetailsResource extends Resource
{
    protected static ?string $model = EducationDetails::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('highest_qualification'),
                Tables\Columns\TextColumn::make('course'),
                Tables\Columns\TextColumn::make('specialization'),
                Tables\Columns\TextColumn::make('university'),
                Tables\Columns\TextColumn::make('education'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
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
            'index' => Pages\ListEducationDetails::route('/'),
            'create' => Pages\CreateEducationDetails::route('/create'),
            'edit' => Pages\EditEducationDetails::route('/{record}/edit'),
        ];
    }    
}
