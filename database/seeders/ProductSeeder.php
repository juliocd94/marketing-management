<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use App\Models\PartType;
use App\Enums\VehicleType;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $partTypes = PartType::all();

        if ($users->isEmpty() || $partTypes->isEmpty()) {
            $this->command->info('Users and part types are needed to create products.');
            return;
        }

        Product::create([
            'seller_id' => $users->random()->id,
            'part_type_id' => $partTypes->random()->id,
            'vehicle_type' => VehicleType::Car->value,
            'product_name' => 'Product 1',
            'brand' => 'Brand A',
            'year' => 2022,
            'price' => 99.99,
            'stock_quantity' => 10,
            'description' => 'Description for Product 1',
        ]);

        Product::create([
            'seller_id' => $users->random()->id,
            'part_type_id' => $partTypes->random()->id,
            'vehicle_type' => VehicleType::Motorcycle->value,
            'product_name' => 'Product 2',
            'brand' => 'Brand B',
            'year' => 2023,
            'price' => 149.99,
            'stock_quantity' => 5,
            'description' => 'Description for Product 2',
        ]);

        Product::create([
            'seller_id' => $users->random()->id,
            'part_type_id' => $partTypes->random()->id,
            'vehicle_type' => VehicleType::Motorcycle->value,
            'product_name' => 'Product 3',
            'brand' => 'Brand C',
            'year' => 2023,
            'price' => 199.99,
            'stock_quantity' => 5,
            'description' => 'Description for Product 3',
        ]);
    }
}
