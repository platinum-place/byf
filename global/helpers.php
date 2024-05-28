<?php

if (! function_exists('only_admin_can')) {
    function only_admin_can(): Closure
    {
        return function () {
            /** @var \App\Models\User */
            $user = auth()->user();

            return ! $user->isAdmin();
        };
    }
}
