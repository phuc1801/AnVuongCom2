<?php

namespace Database\Seeders;

use App\Models\OrderItemDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesTableSeeder::class,
            AdminStaffTableSeeder::class,
            UsersTableSeeder::class,
            GalleryTableSeeder::class,
            ArticlesTableSeeder::class,
            ArticleImagesTableSeeder::class,
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            ProductImagesTableSeeder::class,
            AttributesTableSeeder::class,
            ProductSerialsTableSeeder::class,
            ProductAttributeTableSeeder::class,
            CartItemsTableSeeder::class,
            ReviewsTableSeeder::class,
            NotificationsTableSeeder::class,
            ShippingAddressesTableSeeder::class,
            CouponsTableSeeder::class,
            CategoryAttributeTableSeeder::class,
            OrdersTableSeeder::class,
            OrderItemsTableSeeder::class,
            OrderStatusHistoriesTableSeeder::class,
            PaymentsTableSeeder::class,
            ContactsTableSeeder::class,
            WarrantySerialsTableSeeder::class,
            OrderItemDetailsTableSeeder::class
        ]);
    }
}
