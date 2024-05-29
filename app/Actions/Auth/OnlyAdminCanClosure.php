<?php

namespace App\Actions\Auth;

use Closure;
use Lorisleiva\Actions\Concerns\AsAction;

class OnlyAdminCanClosure
{
    use AsAction;

    public function handle(): Closure
    {
        return function () {
            /** @var \App\Models\User */
            $user = auth()->user();

            return $user->isAdmin();
        };
    }
}
