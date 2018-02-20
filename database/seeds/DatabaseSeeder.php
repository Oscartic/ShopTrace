<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
        factory(Category::class, 50)->create();
        factory(Product::class, 50)->create();
    }
}
