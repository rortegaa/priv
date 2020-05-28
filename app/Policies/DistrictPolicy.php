<?php

namespace App\Policies;

use App\District;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DistrictPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any districts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the district.
     *
     * @param  \App\User  $user
     * @param  \App\District  $district
     * @return mixed
     */
    public function view(User $user, District $district)
    {
        //
    }

    /**
     * Determine whether the user can create districts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the district.
     *
     * @param  \App\User  $user
     * @param  \App\District  $district
     * @return mixed
     */
    public function update(User $user, District $district)
    {
        //
    }

    /**
     * Determine whether the user can delete the district.
     *
     * @param  \App\User  $user
     * @param  \App\District  $district
     * @return mixed
     */
    public function delete(User $user, District $district)
    {
        //
    }

    /**
     * Determine whether the user can restore the district.
     *
     * @param  \App\User  $user
     * @param  \App\District  $district
     * @return mixed
     */
    public function restore(User $user, District $district)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the district.
     *
     * @param  \App\User  $user
     * @param  \App\District  $district
     * @return mixed
     */
    public function forceDelete(User $user, District $district)
    {
        //
    }
}
