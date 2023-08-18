<?php

namespace App\Models;

use App\Models\Employees;
use App\Models\EmployeeComments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeComments extends Model
{
    use HasFactory;
    protected $gaurded = [];

    /**
     * Get the Employee that owns the EmployeeComments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employees::class, 'employee_id', 'id');
    }

    /**
     * Get the user that owns the EmployeeComments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'comment_by', 'id');
    }

     /**
     * Get the user that owns the EmployeeComments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function upperComment(): BelongsTo
    {
        return $this->belongsTo(EmployeeComments::class, 'upper_comment', 'id');
    }
}
