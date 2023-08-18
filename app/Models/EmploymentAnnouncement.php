<?php

namespace App\Models;

use App\Models\Departments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class EmploymentAnnouncement extends Model
{
    use HasFactory;

    protected $guarded = [];
   

  public function department() :BelongsTo
  {
      return $this->belongsTo(Departments::class);
  }

  /**
   * Get all of the employee for the EmploymentAnnouncement
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function employee(): HasMany
  {
      return $this->hasMany(Employees::class, 'employment_announcement_id', 'id');
  }

}
