<?php

use Illuminate\Database\Seeder;

class CharacteristicCommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CharacteristicCommerce::class, 2)->create();
    }
}
