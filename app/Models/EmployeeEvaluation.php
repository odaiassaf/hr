<?php

namespace App\Models;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeEvaluation extends Model
{
    use HasFactory;

    protected $gaurded =[];

    /**
     * Get the employee that owns the EmployeeEvaluation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employees::class, 'employee_id', 'id');
    }
    /**
     * Get the user that owns the EmployeeEvaluation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

 
}
