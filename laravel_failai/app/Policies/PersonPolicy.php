<?php

namespace App\Policies;

use App\Models\Person;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PersonPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true; // iki kol atsiras Roles
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $person
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Person $person): Response|bool
    {
        return $user->id === $person->user_id
            ? Response::allow()
            : Response::deny(__('You do not own this person'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $person
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Person $person)
    {
        return $user->id === $person->user_id /** $user->isAdmin  or $user->role==='manager' */
            ? Response::allow()
            : Response::deny(__('You do not own this person'));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $person
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Person $person)
    {
        return $user->id === $person->user_id /** $user->isAdmin  or $user->role==='manager' */
            ? Response::allow()
            : Response::deny(__('You do not own this person'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $person
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Person $person)
    {
//       return $user->id === $person->user_id /** $user->isAdmin  or $user->role==='manager' */
//            ? Response::allow()
//            : Response::deny(__('You do not own this person'));
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $person
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Person $person)
    {
        return false;
    }
}
