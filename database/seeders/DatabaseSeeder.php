<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Hamcrest\Description;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Listing::factory(6)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'email' => 'asd@asd.com',
            'website' => 'asd.com',
            'location' => 'Illinois',
            'description' => 'alasdf asdfasdf asdfasdfad fsd
            asdfasdfsadf asdfasdf asdf asdf  fsadfasdfasdf a
            asdfsadfsdf sdfd dfdfdf df d d dsadfsd mmmm'
        ]);

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'email' => 'asd@asd.com',
            'website' => 'https://asd.com',
            'location' => 'Illinois',
            'description' => 'alasdf asdfasdf asdfasdfad fsd
            asdfasdfsadf asdfasdf asdf asdf  fsadfasdfasdf a
            asdfsadfsdf sdfd dfdfdf df d d dsadfsd mmmm'
        ]);


    
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
