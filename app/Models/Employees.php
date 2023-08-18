<?php

namespace App\Models;

use App\Models\User;
use App\Models\Position;
use App\Models\Employees;
use App\Models\EmployeeSkills;
use App\Models\EmployeeAccount;
use App\Models\EmployeeComments;
use App\Models\EmployeeRequests;
use App\Models\EmployeeDocuments;
use App\Models\EmployeeEvaluation;
use App\Models\EmployeeExperiences;
use App\Models\EmploymentAnnouncement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employees extends Model
{
    use HasFactory;

    protected $gaurded =[];
   

    /**
     * Get all of the EmployeeComments for the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(EmployeeComments::class, 'employee_id', 'id');
    }

    /**
     * Get all of the EmployeeDocuments for the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documents(): HasMany
    {
        return $this->hasMany(EmployeeDocuments::class, 'employee_id', 'id');
    }

    /**
     * Get all of the EmployeeEvaluation for the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluation(): HasMany
    {
        return $this->hasMany(EmployeeEvaluation::class, 'employee_id', 'id');
    }

    /**
     * Get all of the employeeExperiences for the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experiences(): HasMany
    {
        return $this->hasMany(EmployeeExperiences::class, 'employee_id', 'id');
    }

    /**
     * Get all of the employeeLanguages for the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function languages(): HasMany
    {
        return $this->hasMany(EmployeeLanguages::class, 'employee_id', 'id');
    }

    /**
     * Get all of the employeeSkills for the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skills(): HasMany
    {
        return $this->hasMany(EmployeeSkills::class, 'employee_id', 'id');
    }

    /**
     * Get all of the employeeStudies for the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studies(): HasMany
    {
        return $this->hasMany(EmployeeStudies::class, 'employee_id', 'id');
    }

    /**
     * Get the Departments that owns the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departments(): BelongsTo
    {
        return $this->belongsTo(Departments::class, 'department_id', 'id');
    }

    /**
     * Get the Announcement that owns the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function announcement(): BelongsTo
    {
        return $this->belongsTo(EmploymentAnnouncement::class, 'employment_announcement_id', 'id');
    }

    

    /**
     * Get the Manager  that owns the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manager(): BelongsTo
    {
        return $this->belongsTo(Employees::class, 'manager_id');
    }

    /**
     * Get all of the employees for the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employees::class, 'manager_id');
    }

    /**
     * Get the Position that owns the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }

    /**
     * Get the user that owns the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }



    /**
     * Get the account associated with the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function account(): HasOne
    {
        return $this->hasOne(EmployeeAccount::class, 'employee_id', 'id');
    }


    /**
     * Get all of the request for the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function request(): HasMany
    {
        return $this->hasMany(EmployeeRequests::class, 'employee_id', 'id');
    }

    /**
     * Get all of the tasks for the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class, 'employee_id', 'id');
    }

}
