<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Connect;
use App\Models\Education;
use App\Models\Experience;
use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Message;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        Skill::truncate();
        Message::truncate();
        About::truncate();
        Experience::truncate();
        Education::truncate();
        Connect::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Skill::factory()->count(5)->create();
        Message::factory()->count(10)->create();
        About::factory()->count(5)->create();
        Experience::factory()->count(10)->create();
        Education::factory()->count(10)->create();
        Connect::factory()->count(10)->create();

            
    }
}
