<?php

namespace App\Services;

use App\Models\UserAction;
use Illuminate\Database\Eloquent\Collection;

class UserActionsService
{
    public static function save($data): bool
    {
        $userAction = new UserAction($data);
        return $userAction->save();
    }

    public static function getAll(): Collection
    {
        $userAction = new UserAction();
        return $userAction::all();
    }

}
