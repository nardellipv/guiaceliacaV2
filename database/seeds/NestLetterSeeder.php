<?php

use Illuminate\Database\Seeder;

class NestLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\NewsLetter::class, 103)->create();
    }
}
