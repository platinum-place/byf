<?php

namespace App\Policies;

use App\Enums\ModelEnum;
use App\Enums\PermissionEnum;
use App\Models\Supplier\Agent;
use App\Models\User;

class AgentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermission(PermissionEnum::viewAny, ModelEnum::agent);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Agent $agent): bool
    {
        return $user->hasPermission(PermissionEnum::view, ModelEnum::agent);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermission(PermissionEnum::create, ModelEnum::agent);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Agent $agent): bool
    {
        return $user->hasPermission(PermissionEnum::update, ModelEnum::agent);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Agent $agent): bool
    {
        return $user->hasPermission(PermissionEnum::delete, ModelEnum::agent);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Agent $agent): bool
    {
        return $user->hasPermission(PermissionEnum::restore, ModelEnum::agent);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Agent $agent): bool
    {
        return $user->hasPermission(PermissionEnum::forceDelete, ModelEnum::agent);
    }
}
