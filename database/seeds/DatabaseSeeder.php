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
        $this->call(UserSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(RegionSeeder::class);
//        comentar
        $this->call(CommerceSeeder::class);
//        ------------
        $this->call(CharacteristicSeeder::class);
//        comentar
        $this->call(CharacteristicCommerceSeeder::class);
//        --------------
        $this->call(PaymentSeeder::class);
//        comentar
        $this->call(PaymentCommerceSeeder::class);
//        -----------
        $this->call(BlogSeeder::class);
        $this->call(CategorySeeder::class);
//        comentar
        $this->call(ProductSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(RecipeSeeder::class);
        $this->call(PictureSeeder::class);
//        $this->call(NewsLetterSeeder::class);
        $this->call(CommentBlogSeeder::class);
        $this->call(PromotionSeeder::class);
//        ---------------
        $this->call(PriceSeeder::class);
    }
}
