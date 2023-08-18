<?php

namespace App\Models;

use App\Models\Donors;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projects extends Model
{
    use HasFactory;

    protected $gaurded = [];

    /**
     * Get the donor that owns the Projects
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function donor(): BelongsTo
    {
        return $this->belongsTo(Donors::class, 'donor_id', 'id');
    }
}
