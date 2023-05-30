<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use App\Models\Ecole;
use App\Models\Specialite;
use Filament\Resources\Form;
use App\Models\GraduateLevel;
use Filament\Resources\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class GraduatesRelationManager extends RelationManager
{
    protected static string $relationship = 'graduate';

    protected static ?string $recordTitleAttribute = 'user.name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('specialite_id')->label("Spécialité")
                ->options(Specialite::all()->pluck('lib_spec', 'id')),
                Select::make('ecole_id')->label("Ecole")
                ->options(Ecole::all()->pluck('lib_eco', 'id')),
                TextInput::make('matricule')->label('Matricule'),
                TextInput::make('contact_dipl')->label('Matricule'),
                FileUpload::make('cv'),
                FileUpload::make('photo'),
                Select::make('graduate_level_id')->label("Niveau")
                ->options(GraduateLevel::all()->pluck('lib_dip', 'id')),
                Select::make('statut_dipl')->label("Statut")
                ->options(["Libre"=>"Libre", "Occupé"=>"Occupé", "Freelance"=>"Freelance"]),
                TextInput::make('contact_dipl')->label('contact'),
                DatePicker::make('dtenaiss_dipl')->label('Date de naissance'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('specialite.lib_spec')->label('Spécialité'),
                Tables\Columns\TextColumn::make('ecole.lib_eco')->label('Ecole'),
                Tables\Columns\TextColumn::make('dtenaiss_dipl')->label('Date de naissance'),
                Tables\Columns\TextColumn::make('contact_dipl')->label('Contacte'),
                Tables\Columns\TextColumn::make('statut_dipl')->label('Status'),
                ImageColumn::make('photo')->label('Photo'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
