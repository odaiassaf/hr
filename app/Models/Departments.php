<?php

namespace App\Models;

use App\Models\EmploymentAnnouncement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departments extends Model
{
    use HasFactory;

     protected $guarded = [];
   

   
  
    public function announcement(): HasMany
    {
        return $this->hasMany(EmploymentAnnouncement::class,'department_id');
    }

 /**
  * Get all of the Employees for the Departments
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
 public function Employees(): HasMany
 {
     return $this->hasMany(Employees::class,'department_id');
 }
}
