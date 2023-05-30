<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make("Nombre d'inscits", User::count())->color("success"),
            Card::make('Hommes', User::whereHas('graduate', function ($query) {
                $query->where('sexe_id', 1);
            })->get()->count()),
            Card::make('Femmes', User::whereHas('graduate', function ($query) {
                $query->where('sexe_id', 2);
            })->get()->count()),
        ];
    }
}
