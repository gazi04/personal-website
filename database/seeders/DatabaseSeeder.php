<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Experience::factory()->count(5)->create();
        Project::factory()->count(6)->create();
        BlogPost::factory()->count(10)->create();
        Skill::factory()->count(5)->create();
    }
}
