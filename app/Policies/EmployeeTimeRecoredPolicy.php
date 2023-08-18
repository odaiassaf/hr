<?php

namespace App\Policies;

use App\Models\EmployeeTimeRecored;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EmployeeTimeRecoredPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, EmployeeTimeRecored $employeeTimeRecored): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, EmployeeTimeRecored $employeeTimeRecored): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, EmployeeTimeRecored $employeeTimeRecored): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, EmployeeTimeRecored $employeeTimeRecored): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, EmployeeTimeRecored $employeeTimeRecored): bool
    {
        //
    }
}
