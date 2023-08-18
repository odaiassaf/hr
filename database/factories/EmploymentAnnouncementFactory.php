<?php

namespace Database\Factories;

use App\Models\Departments;
use App\Models\EmploymentAnnouncement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmploymentAnnouncement>
 */
class EmploymentAnnouncementFactory extends Factory
{
    protected $model = EmploymentAnnouncement::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('-1 month', '+1 month');
        $endDate = $this->faker->dateTimeBetween($startDate, '+3 months');
        $country = ['Syria','Turkey','USA','KSA','Jordan','Iraq'];
        $type = ['Full-time','Part-time','Contract','Freelance','Internship','Remote','Entry-level','Managerial','Sales','Technical'];
        $cities = ['Tokyo','New York City','London','Paris','Berlin','Beijing','Moscow','Istanbul','Dubai','Sydney','Rio de Janeiro','Mumbai','Cape Town','Toronto','Rome','Amsterdam','Bangkok','Singapore','Los Angeles','Cairo'];
        $position = ['CEO','Manager','Supervisor','Team Leader','Software Developer','Graphic Designer','Accountant','Human Resources Specialist','Sales Representative','Marketing Coordinator','Customer Service Representative','Administrative Assistant','Project Manager','Financial Analyst','Operations Manager','Data Analyst','Quality Assurance Engineer','Content Writer','IT Support Specialist','Research Scientist'];
        return [
            'title'=> $this->faker->sentence,
            'body'=>$this->faker->paragraphs(10, true),
            'start_date'=>$startDate,
            'end_date'=>$endDate,
            'publish_date'=>$this->faker->dateTimeBetween('-10 day', '+3 week'),
            'country'=>$this->faker->randomElement($country),
            'type'=>$this->faker->randomElement($type),
            'position_title'=>$this->faker->randomElement($position),
            'city'=>$this->faker->randomElement($cities),
            'years_of_experience'=>$this->faker->randomNumber(1,5),
            'image_url'=>$this->faker->ImageUrl(800, 600, 'work'),
             'department_id' => function () {
                return Departments::factory()->create()->id;
            },
        ];
    }
}
