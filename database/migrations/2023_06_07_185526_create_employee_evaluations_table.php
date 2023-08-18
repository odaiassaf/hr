<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee_evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->foreignId('evaluation_by')->constrained('users');
            $table->foreignId('evaluation_for')->constrained('employees');
            $table->date('evaluation_date')->index();
            $table->enum('evaluation_stage',['applying','employee','promotion','leaving','punished','sudden','periodic']);
            $table->enum('evaluation_type',['Job-specific Competencies','Goals Achievement','Quality of Work','Communication and Collaboration','Initiative and Innovation','Professional Development','Leadership and Management']);
            $table->string('evaluation_indicator');
            $table->text('evaluation_description')->nullable();
            $table->smallInteger('evaluation_mark')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamps();
            //NOTE -  Marks
            $table->smallInteger('Competencies')->nullable();
            //NOTE - Competencies
            $table->smallInteger('skills')->nullable();
            $table->smallInteger('knowledge')->nullable();
            $table->smallInteger('effectively')->nullable();
            $table->smallInteger('technical_skills')->nullable();
            $table->smallInteger('problem_solving')->nullable();
            $table->smallInteger('communication_skills')->nullable();
            $table->smallInteger('teamwork')->nullable();
            $table->smallInteger('adaptability')->nullable();
            $table->smallInteger('leadership_qualities')->nullable();
            $table->smallInteger('Goals_Achievement')->nullable();
             //NOTE - Goals_Achievemen
            $table->smallInteger('productivity')->nullable();
            $table->smallInteger('sales_targets')->nullable();
            $table->smallInteger('project_milestones')->nullable();
            $table->smallInteger('customer_satisfaction')->nullable();
            $table->smallInteger('Quality_of_Work')->nullable();
            //NOTE - Quality_of_Work
            $table->smallInteger('work_output')->nullable();
            $table->smallInteger('attention_to_detail')->nullable();
            $table->smallInteger('ability_to_meet_deadlines')->nullable();
            $table->smallInteger('adherence_to_company_policies_and-procedures')->nullable();
            $table->smallInteger('overall_impact')->nullable();
            //NOTE - Communication_and_Collaboration
            $table->smallInteger('Communication_and_Collaboration')->nullable();
            $table->smallInteger('effectively communicate')->nullable();
            $table->smallInteger('collaborate')->nullable();
            $table->smallInteger('work_with_colleagues')->nullable();
            $table->smallInteger('active_listening')->nullable();
            $table->smallInteger('effective_writte')->nullable();
            $table->smallInteger('ability_to_resolve_conflicts')->nullable();
            //NOTE - Initiative_and_Innovation
            $table->smallInteger('Initiative_and_Innovation')->nullable();
            $table->smallInteger('level_of_initiative')->nullable();
            $table->smallInteger('proactive_problem_solving')->nullable();
            $table->smallInteger('improvements')->nullable();
            $table->smallInteger('innovative_ideas')->nullable();
            $table->smallInteger('suggest_creative_solutions')->nullable();
             $table->smallInteger('take_ownership_of_tasks')->nullable();
            $table->smallInteger('contribute_to_the_overall_success_of_the_team')->nullable();
            //NOTE - Professional_Development
            $table->smallInteger('Professional_Development')->nullable();
             $table->smallInteger('continuous_learning')->nullable();
            $table->smallInteger('participation_in_training_programs')->nullable();
            $table->smallInteger('acquiring_new_skills')->nullable();
            $table->smallInteger('pursuing_certifications')->nullable();
            $table->smallInteger('actively_seeking_growth_opportunities')->nullable();
            //NOTE - Leadership_and_Management
            $table->smallInteger('Leadership_and_Management')->nullable();
            $table->smallInteger('motivate_others')->nullable();
            $table->smallInteger('delegation_skills')->nullable();
            $table->smallInteger('overall_effectiveness')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_evaluations');
    }
};
