<?php

namespace App\Models;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EmployeeTasks extends Model
{
    use HasFactory;
    protected $gaurded = [];

    /**
     * The employees that belong to the EmployeeTasks
     *
     * @return BelongsToMany
     */
    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employees::class, 'task_assign_to', 'task_id', 'employee_id');
    }
    
}
