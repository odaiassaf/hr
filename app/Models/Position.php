<?php

namespace App\Models;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;
    

 protected $gaurded =[];

  /**
   * Get all of the employee for the Position
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function employee(): HasMany
  {
      return $this->hasMany(Employees::class, 'position_id', 'id');
  }
}
