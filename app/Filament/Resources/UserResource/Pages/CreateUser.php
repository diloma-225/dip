<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $record =  static::getModel()::create([
            'name'=>$data['name'],
            'prenoms'=>$data['prenoms'],
            'email'=>$data['email'],
            'password'=>$data['password'],
        ]);
        $record->graduate()->create($data['graduate']);
        return $record;
    }
}
