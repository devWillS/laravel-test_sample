<?php

namespace Database\Seeders;

use App\Models\EloquentCustomer;
use App\Models\EloquentCustomerPoint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        EloquentCustomer::factory()->create(
            [
                'id' => 1,
            ]
        );

        EloquentCustomerPoint::unguard();
        EloquentCustomerPoint::create(
            [
                'customer_id' => 1,
                'point' => 100,
            ]
        );
        EloquentCustomerPoint::reguard();
    }
}
