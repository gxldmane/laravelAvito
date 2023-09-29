<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class AdminPolicy
{
    /**
     * Determine whether the seller can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the seller can view the model.
     */
    public function view(User $user, User $model): bool
    {
        return true;
    }

    /**
     * Determine whether the seller can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the seller can update the model.
     */
    public function update(User $user, User $model): bool
    {
        //
    }

    /**
     * Determine whether the seller can delete the model.
     */
    public function delete(User $user, User $model): bool
    {
        //
    }

    /**
     * Determine whether the seller can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        //
    }

    /**
     * Determine whether the seller can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        //
    }
}
