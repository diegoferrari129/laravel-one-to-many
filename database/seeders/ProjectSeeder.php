<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $project = new Project();

            $project->title = $faker->sentence(3); 
            $project->description = $faker->paragraph(); 
            $project->repository = $faker->url(); 
            $project->image = $faker->imageUrl(640, 480, 'projects'); 
            $project->technologies = implode(', ', $faker->words(3)); 
            $project->status = $faker->randomElement(['completed', 'work in progress']); 
            $project->start_date = $faker->date(); 
            $project->end_date = $faker->date();

            $project->slug = Str::slug($project->title, '-');
            
            $project->save();
        }
    }
}
