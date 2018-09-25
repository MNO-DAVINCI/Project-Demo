<?php

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
        factory(App\Project::class, 10)->create()->each(function ($p) {
        	$p->students()->save(factory(App\Student::class)->make());
        	$p->students()->save(factory(App\Student::class)->make());
        	$p->students()->save(factory(App\Student::class)->make());
        	$p->students()->save(factory(App\Student::class)->make());
    	});
    }
}
