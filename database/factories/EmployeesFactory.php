<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Position;

use App\Models\Employees;

use App\Models\Departments;
use App\Models\EmploymentAnnouncement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    protected $model = Employees::class;
    // protected $model = Employees::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->date(),
            'start_date' => $this->faker->date(),
            'leaving_date' => $this->faker->date(),
            'social_security_number' => $this->faker->unique()->numerify('##########'),
            'id_number' => $this->faker->unique()->numerify('##########'),
            'home_address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'passport_no' => $this->faker->unique()->numerify('##########'),
            'passport_expiry_date' => $this->faker->date(),
            'tel' => $this->faker->phoneNumber,
            'nationality' => $this->faker->country,
            'religion' => $this->faker->word,
            'marital_status' => $this->faker->randomElement(['Single', 'Married', 'Divorced', 'Widowed']),
            'employment_of_spouse' => $this->faker->word,
            'children' => $this->faker->randomDigit,
            'email' => $this->faker->unique()->safeEmail,
            'emergency_contact_name' => $this->faker->name,
            'emergency_contact_phone_number' => $this->faker->phoneNumber,
            'citizenship' => $this->faker->country,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'is_disabled' => $this->faker->boolean,
            'facebook' => $this->faker->url,
            'linkedin' => $this->faker->url,
            'image' => null,
            'attachemnt' => null,
            'cv' => null,
            'avatar' => null,
            'id_image1' => null,
            'id_image2' => null,
            'employment_status' => $this->faker->randomElement(['Full-Time', 'Part-Time', 'Contract']),
            'evaluation' => null,
            'manager_id' => '1',
            // 'position_id' => function () {
            // return Position::factory()->create()->id;
            //  },
            'position_id'=>$this->faker->numberBetween(1, 8),
            'department_id'=>$this->faker->numberBetween(1, 8),
            'employment_announcement_id'=>$this->faker->numberBetween(1, 6),
            'user_id'=>User::factory(),
            // 'employment_announcement_id'=>EmploymentAnnouncement::factory(),
            // 'manager_id' => function(){
            //     return Employees::factory()->create()->id;
            // },
            // 'user_id' => function(){
            //     return User::factory()->create()->id;
            // },
            // 'employment_announcement_id' => function(){
            //   return EmploymentAnnouncement::factory()->create()->id;
            // },
           
        ];
        
    }
}
