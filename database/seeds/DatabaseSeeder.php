<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for($i=0; $i<5; $i++){
        $customer = new App\Customer();
        $customer->name = $faker->name;
        $customer->email = $faker->email;
        $customer->phone = $faker->phoneNumber;
        $customer->address = $faker->address;
        $customer->save();
      }

      $products = [ 'Samsung', 'Apple', 'Oppo', 'Huawei', 'Vivo'];
      for($i=0; $i<5; $i++) {
          $product = new App\Product();
          $product->name = $products[ $i ];
          $product->make = strtoupper ( str_random(5) );
          $product->model = strtoupper (str_random(5) );
          $product->save();
      }
    }
}
