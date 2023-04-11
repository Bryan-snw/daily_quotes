<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::create([
            'source' => 'Anonyomous',
            'message' => "How do you eat an elephane? One bite at a time."
        ]);

        Post::create([
            'source' => 'Anonyomous',
            'message' => "To Accept, to enjoy, and to let it go."
        ]);

        Post::create([
            'source' => 'Unknown',
            'message' => "You cannot become what you want by remaining what you are."
        ]);

        Post::create([
            'source' => 'Unknown',
            'message' => "You have come such a long way, don't give up now."
        ]);

        Post::create([
            'source' => 'Brianna Wiest',
            'message' => "Fear is not going to protect you. Action is. Worrying is not going to protect you. Preparing is. Overthinking is not going to protect you. Understanding is."
        ]);

        Post::create([
            'source' => 'Brianna Wiest',
            'message' => "Fear is not going to protect you. Action is. Worrying is not going to protect you. Preparing is. Overthinking is not going to protect you. Understanding is."
        ]);

        Post::create([
            'source' => 'Unknown',
            'message' => "If you're gonna fall, make sure to fall forward."
        ]);
    }
}
