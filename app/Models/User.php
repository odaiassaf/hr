<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\EmployeeRequests;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Get the role that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
     public function employee(): HasOne
    {
        return $this->hasOne(Employees::class);
    }

    /**
     * Get all of the Employeecomments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employeecomment(): HasMany
    {
        return $this->hasMany(EmployeeComments::class, 'comment_by', 'id');
    }
    /**
     * Get all of the evaluation for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluation(): HasMany
    {
        return $this->hasMany(EmployeeEvaluation::class, 'evaluation_by', 'id');
    }


 /**
  * Get all of the request for the User
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
 public function request(): HasMany
 {
     return $this->hasMany(EmployeeRequests::class, 'user_id', 'id');
 }
}
