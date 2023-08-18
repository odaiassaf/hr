<?php

namespace App\Models;

use App\Models\Projects;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donors extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the projects for the Donors
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Projects::class, 'donor_id', 'id');
    }
}
