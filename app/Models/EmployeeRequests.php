<?php

namespace App\Models;

use App\Models\User;
use App\Models\Employees;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeRequests extends Model
{
    use HasFactory;
    protected $gaurded = [];

    /**
     * Get the user that owns the EmployeeRequests
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the employee that owns the EmployeeRequests
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employees::class, 'employee_id', 'id');
    }
}
