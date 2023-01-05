<?php

namespace Database\Factories;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(),
            'start_at'=>Carbon::now(),
            'end_at'=>Carbon::now()->addDays(rand(0,15)),
            'status'=>$this->faker->randomElement([true,false])
        ];
    }
}
