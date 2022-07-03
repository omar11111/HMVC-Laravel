<?php

namespace Database\Seeders;

use App\Models\User;
use Customers\Models\Customer;
use Illuminate\Database\Seeder;

class Customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::Create([
            'name' =>"omar",
          
        ]);
    }

}
