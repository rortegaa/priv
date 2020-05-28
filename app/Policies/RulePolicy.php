<?php

namespace App\Policies;

use App\Rule;
use App\User;
use App\District;
use Illuminate\Auth\Access\HandlesAuthorization;

class RulePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any rules.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the rule.
     *
     * @param  \App\User  $user
     * @param  \App\Rule  $rule
     * @return mixed
     */
    public function view(User $user, Rule $rule)
    {
        //
    }

    /**
     * Determine whether the user can create rules.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the rule.
     *
     * @param  \App\User  $user
     * @param  \App\Rule  $rule
     * @return mixed
     */
    public function update(User $user, Rule $rule)
    {
        //
    }

    /**
     * Determine whether the user can delete the rule.
     *
     * @param  \App\User  $user
     * @param  \App\Rule  $rule
     * @return mixed
     */
    public function delete(User $user, Rule $rule)
    {
        //
    }

    /**
     * Determine whether the user can restore the rule.
     *
     * @param  \App\User  $user
     * @param  \App\Rule  $rule
     * @return mixed
     */
    public function restore(User $user, Rule $rule)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the rule.
     *
     * @param  \App\User  $user
     * @param  \App\Rule  $rule
     * @return mixed
     */
    public function forceDelete(User $user, Rule $rule)
    {
        //
    }
}
