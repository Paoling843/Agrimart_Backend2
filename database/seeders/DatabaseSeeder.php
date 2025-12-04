<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use App\Models\Address;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
    
        Product::factory(20)->create();
        Customer::factory(10)->create();
        Address::factory(15)->create();
        Order::factory(10)->create();
    
        
    }

}
