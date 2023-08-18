<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeExperiences extends Model
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
}
