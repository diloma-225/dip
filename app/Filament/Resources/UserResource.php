<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Sexe;
use App\Models\User;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\Ecole;
use App\Models\GraduateLevel;
use App\Models\Specialite;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('name')->label('Nom'),
                TextInput::make('prenoms')->label('Prénoms'),
                TextInput::make('email')->label('Email'),
                TextInput::make('password')->label('Mot de passe')->password()->dehydrateStateUsing(fn ($state) => Hash::make($state)),
                TextInput::make('passwordConfirmation')->label('Confirmer mot de passe')
                ->password()->dehydrated(false),
                DatePicker::make('graduate.dtenaiss_dipl')->label('Date de naissance'),
                TextInput::make('graduate.contact_dipl')->label('contact'),
                Select::make('graduate.statut_dipl')->label("Statut")
                ->options(["Libre"=>"Libre", "Occupé"=>"Occupé", "Freelance"=>"Freelance"]),
                TextInput::make('graduate.id_adm')->label('contact')->hidden()->default(1),
                FileUpload::make('graduate.cv'),
                FileUpload::make('graduate.photo'),
                Select::make('graduate.graduate_level_id')->label("Niveau")
                ->options(GraduateLevel::all()->pluck('lib_dip', 'id')),
                Select::make('graduate.ecole_id')->label("Ecole")
                ->options(Ecole::all()->pluck('lib_eco', 'id')),
                TextInput::make('graduate.matricule')->label('Matricule'),
                Select::make('graduate.specialite_id')->label("Spécialité")
                ->options(Specialite::all()->pluck('lib_spec', 'id')),
                Select::make('graduate.sexe_id')->label("Sexe")
                ->options(Sexe::all()->pluck('libelle', 'id')),

            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('nom'),
                TextColumn::make('prenoms')->label('Prénoms'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->mutateRecordDataUsing(function (array $data): array {
                    dd($data);
                    $data['user_id'] = auth()->id();

                    return $data;
                }),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\GraduatesRelationManager::class,
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
