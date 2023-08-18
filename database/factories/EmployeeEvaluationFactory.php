<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeEvaluation>
 */
class EmployeeEvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'evaluation_by'=> User::factory(),
            'evaluation_for'=> Employees::factory(),
            'evaluation_date' => $this->faker->date(),
            'evaluation_stage' => $this->faker->randomElement(['applying', 'employee', 'promotion', 'leaving', 'punished', 'sudden', 'periodic']),
            'evaluation_type' => $this->faker->randomElement(['Job-specific Competencies', 'Goals Achievement', 'Quality of Work', 'Communication and Collaboration', 'Initiative and Innovation', 'Professional Development', 'Leadership and Management']),
            'evaluation_indicator' => $this->faker->word,
            'evaluation_description' => $this->faker->paragraph,
            'evaluation_mark' => $this->faker->numberBetween(1, 100),
            'attachment' => null,
            'Competencies' => $this->faker->numberBetween(1, 10),
            'skills' => $this->faker->numberBetween(1, 10),
            'knowledge' => $this->faker->numberBetween(1, 10),
            'effectively' => $this->faker->numberBetween(1, 10),
            'technical_skills' => $this->faker->numberBetween(1, 10),
            'problem_solving' => $this->faker->numberBetween(1, 10),
            'communication_skills' => $this->faker->numberBetween(1, 10),
            'teamwork' => $this->faker->numberBetween(1, 10),
            'adaptability' => $this->faker->numberBetween(1, 10),
            'leadership_qualities' => $this->faker->numberBetween(1, 10),
            'Goals_Achievement' => $this->faker->numberBetween(1, 10),
            'productivity' => $this->faker->numberBetween(1, 10),
            'sales_targets' => $this->faker->numberBetween(1, 10),
            'project_milestones' => $this->faker->numberBetween(1, 10),
            'customer_satisfaction' => $this->faker->numberBetween(1, 10),
            'Quality_of_Work' => $this->faker->numberBetween(1, 10),
            'work_output' => $this->faker->numberBetween(1, 10),
            'attention_to_detail' => $this->faker->numberBetween(1, 10),
            'ability_to_meet_deadlines' => $this->faker->numberBetween(1, 10),
            'adherence_to_company_policies_and-procedures' => $this->faker->numberBetween(1, 10),
            'overall_impact' => $this->faker->numberBetween(1, 10),
            'Communication_and_Collaboration' => $this->faker->numberBetween(1, 10),
            'effectively' => $this->faker->numberBetween(1, 10),
            'collaborate' => $this->faker->numberBetween(1, 10),
            'work_with_colleagues' => $this->faker->numberBetween(1, 10),
            'active_listening' => $this->faker->numberBetween(1, 10),
            'effective_writte' => $this->faker->numberBetween(1, 10),
            'ability_to_resolve_conflicts' => $this->faker->numberBetween(1, 10),
            'Initiative_and_Innovation' => $this->faker->numberBetween(1, 10),
            'level_of_initiative' => $this->faker->numberBetween(1, 10),
            'proactive_problem_solving' => $this->faker->numberBetween(1, 10),
            'improvements' => $this->faker->numberBetween(1, 10),
            'innovative_ideas' => $this->faker->numberBetween(1, 10),
            'suggest_creative_solutions' => $this->faker->numberBetween(1, 10),
            'take_ownership_of_tasks' => $this->faker->numberBetween(1, 10),
            'contribute_to_the_overall_success_of_the_team' => $this->faker->numberBetween(1, 10),
            'Professional_Development' => $this->faker->numberBetween(1, 10),
            'continuous_learning' => $this->faker->numberBetween(1, 10),
            'participation_in_training_programs' => $this->faker->numberBetween(1, 10),
            'acquiring_new_skills' => $this->faker->numberBetween(1, 10),
            'pursuing_certifications' => $this->faker->numberBetween(1, 10),
            'actively_seeking_growth_opportunities' => $this->faker->numberBetween(1, 10),
            'Leadership_and_Management' => $this->faker->numberBetween(1, 10),
            'motivate_others' => $this->faker->numberBetween(1, 10),
            'delegation_skills' => $this->faker->numberBetween(1, 10),
            'overall_effectiveness' => $this->faker->numberBetween(1, 10),
        ];
    }
}
