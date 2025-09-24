<?php

namespace Database\Seeders;

use App\Models\ProductAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductAttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        ProductAttribute::create(['product_id' => 1, 'attribute_id' => 1, 'value' => 'Intel Core i5-1135G7', 'short_value' => 'i5-1135G7', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 1, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 1, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 1, 'attribute_id' => 4, 'value' => '15.6 inch Full HD', 'short_value' => '15.6" FHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 1, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 1, 'attribute_id' => 6, 'value' => '3-cell 41Wh', 'short_value' => '41Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 1, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 1, 'attribute_id' => 8, 'value' => '1.8kg', 'short_value' => '1.8kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 1, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI', 'short_value' => 'USB-C/A, HDMI', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 1, 'attribute_id' => 74, 'value' => '720p HD', 'short_value' => '720p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 1, 'attribute_id' => 132, 'value' => 'Dell', 'short_value' => 'Dell', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 2, 'attribute_id' => 1, 'value' => 'Intel Core i5-1335U', 'short_value' => 'i5-1335U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 2, 'attribute_id' => 2, 'value' => '16GB DDR4', 'short_value' => '16GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 2, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 2, 'attribute_id' => 4, 'value' => '16 inch WUXGA', 'short_value' => '16" WUXGA', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 2, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 2, 'attribute_id' => 6, 'value' => '4-cell 54Wh', 'short_value' => '54Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 2, 'attribute_id' => 7, 'value' => 'Windows 11 Pro', 'short_value' => 'Win11 Pro', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 2, 'attribute_id' => 8, 'value' => '1.9kg', 'short_value' => '1.9kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 2, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, LAN', 'short_value' => 'USB-C/A, HDMI, LAN', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 2, 'attribute_id' => 74, 'value' => '1080p FHD', 'short_value' => '1080p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 2, 'attribute_id' => 132, 'value' => 'Dell', 'short_value' => 'Dell', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 1, 'value' => 'Intel Core i5-10300H', 'short_value' => 'i5-10300H', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 4, 'value' => '15.6 inch Full HD', 'short_value' => '15.6" FHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 5, 'value' => 'NVIDIA GeForce GTX 1650', 'short_value' => 'GTX 1650', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 6, 'value' => '3-cell 42Wh', 'short_value' => '42Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 7, 'value' => 'Windows 10 Home', 'short_value' => 'Win10 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 8, 'value' => '1.85kg', 'short_value' => '1.85kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI', 'short_value' => 'USB-C/A, HDMI', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 74, 'value' => '720p HD', 'short_value' => '720p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 78, 'value' => 'No', 'short_value' => 'N', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 3, 'attribute_id' => 132, 'value' => 'Dell', 'short_value' => 'Dell', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 4, 'attribute_id' => 1, 'value' => 'Intel Core i7-11800H', 'short_value' => 'i7-11800H', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 4, 'attribute_id' => 2, 'value' => '16GB DDR4', 'short_value' => '16GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 4, 'attribute_id' => 3, 'value' => '1TB SSD', 'short_value' => '1TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 4, 'attribute_id' => 4, 'value' => '15.6 inch QHD 240Hz', 'short_value' => '15.6" QHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 4, 'attribute_id' => 5, 'value' => 'NVIDIA GeForce RTX 3070', 'short_value' => 'RTX 3070', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 4, 'attribute_id' => 6, 'value' => '6-cell 86Wh', 'short_value' => '86Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 4, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 4, 'attribute_id' => 8, 'value' => '2.5kg', 'short_value' => '2.5kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 4, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, Thunderbolt', 'short_value' => 'USB-C/A, HDMI, TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 4, 'attribute_id' => 74, 'value' => '1080p FHD', 'short_value' => '1080p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 4, 'attribute_id' => 132, 'value' => 'Dell', 'short_value' => 'Dell', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 5, 'attribute_id' => 1, 'value' => 'Intel Core i5-1235U', 'short_value' => 'i5-1235U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 5, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 5, 'attribute_id' => 3, 'value' => '256GB SSD', 'short_value' => '256GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 5, 'attribute_id' => 4, 'value' => '14 inch Full HD', 'short_value' => '14" FHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 5, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 5, 'attribute_id' => 6, 'value' => '3-cell 41Wh', 'short_value' => '41Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 5, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 5, 'attribute_id' => 8, 'value' => '1.5kg', 'short_value' => '1.5kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 5, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI', 'short_value' => 'USB-C/A, HDMI', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 5, 'attribute_id' => 74, 'value' => '720p HD', 'short_value' => '720p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 5, 'attribute_id' => 132, 'value' => 'Dell', 'short_value' => 'Dell', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 6, 'attribute_id' => 1, 'value' => 'Intel Core i5-1235U', 'short_value' => 'i5-1235U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 6, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 6, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 6, 'attribute_id' => 4, 'value' => '15.6 inch Full HD', 'short_value' => '15.6" FHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 6, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 6, 'attribute_id' => 6, 'value' => '3-cell 45Wh', 'short_value' => '45Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 6, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 6, 'attribute_id' => 8, 'value' => '1.7kg', 'short_value' => '1.7kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 6, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI', 'short_value' => 'USB-C/A, HDMI', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 6, 'attribute_id' => 74, 'value' => '720p HD', 'short_value' => '720p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 6, 'attribute_id' => 132, 'value' => 'Lenovo', 'short_value' => 'Lenovo', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 7, 'attribute_id' => 1, 'value' => 'Intel Core i7-1355U', 'short_value' => 'i7-1355U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 7, 'attribute_id' => 2, 'value' => '16GB LPDDR5', 'short_value' => '16GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 7, 'attribute_id' => 3, 'value' => '1TB SSD', 'short_value' => '1TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 7, 'attribute_id' => 4, 'value' => '14 inch 2.8K OLED', 'short_value' => '14" OLED', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 7, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 7, 'attribute_id' => 6, 'value' => '4-cell 70Wh', 'short_value' => '70Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 7, 'attribute_id' => 7, 'value' => 'Windows 11 Pro', 'short_value' => 'Win11 Pro', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 7, 'attribute_id' => 8, 'value' => '1.3kg', 'short_value' => '1.3kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 7, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, Thunderbolt', 'short_value' => 'USB-C/A, HDMI, TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 7, 'attribute_id' => 74, 'value' => '1080p FHD', 'short_value' => '1080p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 7, 'attribute_id' => 132, 'value' => 'Lenovo', 'short_value' => 'Lenovo', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 8, 'attribute_id' => 1, 'value' => 'Intel Core i7-1360P', 'short_value' => 'i7-1360P', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 8, 'attribute_id' => 2, 'value' => '32GB DDR5', 'short_value' => '32GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 8, 'attribute_id' => 3, 'value' => '1TB SSD', 'short_value' => '1TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 8, 'attribute_id' => 4, 'value' => '15.6 inch WUXGA', 'short_value' => '15.6" WUXGA', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 8, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 8, 'attribute_id' => 6, 'value' => '4-cell 57Wh', 'short_value' => '57Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 8, 'attribute_id' => 7, 'value' => 'Windows 11 Pro', 'short_value' => 'Win11 Pro', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 8, 'attribute_id' => 8, 'value' => '1.7kg', 'short_value' => '1.7kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 8, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, Thunderbolt', 'short_value' => 'USB-C/A, HDMI, TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 8, 'attribute_id' => 74, 'value' => '1080p FHD', 'short_value' => '1080p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 8, 'attribute_id' => 132, 'value' => 'Lenovo', 'short_value' => 'Lenovo', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 9, 'attribute_id' => 1, 'value' => 'Intel Core i5-13450HX', 'short_value' => 'i5-13450HX', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 9, 'attribute_id' => 2, 'value' => '16GB DDR5', 'short_value' => '16GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 9, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 9, 'attribute_id' => 4, 'value' => '15.6 inch Full HD 144Hz', 'short_value' => '15.6" FHD 144Hz', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 9, 'attribute_id' => 5, 'value' => 'NVIDIA GeForce RTX 4050', 'short_value' => 'RTX 4050', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 9, 'attribute_id' => 6, 'value' => '4-cell 60Wh', 'short_value' => '60Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 9, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 9, 'attribute_id' => 8, 'value' => '2.4kg', 'short_value' => '2.4kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 9, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, LAN', 'short_value' => 'USB-C/A, HDMI, LAN', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 9, 'attribute_id' => 74, 'value' => '1080p FHD', 'short_value' => '1080p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 9, 'attribute_id' => 132, 'value' => 'Lenovo', 'short_value' => 'Lenovo', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 10, 'attribute_id' => 1, 'value' => 'Intel Core i9-13980HX', 'short_value' => 'i9-13980HX', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 10, 'attribute_id' => 2, 'value' => '32GB DDR5', 'short_value' => '32GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 10, 'attribute_id' => 3, 'value' => '1TB SSD', 'short_value' => '1TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 10, 'attribute_id' => 4, 'value' => '16 inch QHD+ 240Hz', 'short_value' => '16" QHD+', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 10, 'attribute_id' => 5, 'value' => 'NVIDIA GeForce RTX 4090', 'short_value' => 'RTX 4090', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 10, 'attribute_id' => 6, 'value' => '6-cell 99Wh', 'short_value' => '99Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 10, 'attribute_id' => 7, 'value' => 'Windows 11 Pro', 'short_value' => 'Win11 Pro', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 10, 'attribute_id' => 8, 'value' => '2.8kg', 'short_value' => '2.8kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 10, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, Thunderbolt, LAN', 'short_value' => 'USB-C/A, HDMI, TB, LAN', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 10, 'attribute_id' => 74, 'value' => '1080p FHD', 'short_value' => '1080p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 10, 'attribute_id' => 132, 'value' => 'Lenovo', 'short_value' => 'Lenovo', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 11, 'attribute_id' => 1, 'value' => 'AMD Ryzen 5 5500U', 'short_value' => 'Ryzen 5 5500U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 11, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 11, 'attribute_id' => 3, 'value' => '256GB SSD', 'short_value' => '256GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 11, 'attribute_id' => 4, 'value' => '14 inch Full HD', 'short_value' => '14" FHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 11, 'attribute_id' => 5, 'value' => 'AMD Radeon Graphics', 'short_value' => 'Radeon', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 11, 'attribute_id' => 6, 'value' => '3-cell 36Wh', 'short_value' => '36Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 11, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 11, 'attribute_id' => 8, 'value' => '1.4kg', 'short_value' => '1.4kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 11, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI', 'short_value' => 'USB-C/A, HDMI', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 11, 'attribute_id' => 74, 'value' => '720p HD', 'short_value' => '720p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 11, 'attribute_id' => 132, 'value' => 'Acer', 'short_value' => 'Acer', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 12, 'attribute_id' => 1, 'value' => 'Intel Core i5-1235U', 'short_value' => 'i5-1235U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 12, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 12, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 12, 'attribute_id' => 4, 'value' => '15.6 inch Full HD', 'short_value' => '15.6" FHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 12, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 12, 'attribute_id' => 6, 'value' => '3-cell 36Wh', 'short_value' => '36Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 12, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 12, 'attribute_id' => 8, 'value' => '1.6kg', 'short_value' => '1.6kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 12, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI', 'short_value' => 'USB-C/A, HDMI', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 12, 'attribute_id' => 74, 'value' => '720p HD', 'short_value' => '720p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 12, 'attribute_id' => 132, 'value' => 'Acer', 'short_value' => 'Acer', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 13, 'attribute_id' => 1, 'value' => 'Intel Core i3-1215U', 'short_value' => 'i3-1215U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 13, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 13, 'attribute_id' => 3, 'value' => '256GB SSD', 'short_value' => '256GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 13, 'attribute_id' => 4, 'value' => '14 inch Full HD', 'short_value' => '14" FHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 13, 'attribute_id' => 5, 'value' => 'Intel UHD Graphics', 'short_value' => 'UHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 13, 'attribute_id' => 6, 'value' => '3-cell 36Wh', 'short_value' => '36Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 13, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 13, 'attribute_id' => 8, 'value' => '1.4kg', 'short_value' => '1.4kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 13, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI', 'short_value' => 'USB-C/A, HDMI', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 13, 'attribute_id' => 74, 'value' => '720p HD', 'short_value' => '720p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 13, 'attribute_id' => 132, 'value' => 'Acer', 'short_value' => 'Acer', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 14, 'attribute_id' => 1, 'value' => 'Intel Core i7-1355U', 'short_value' => 'i7-1355U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 14, 'attribute_id' => 2, 'value' => '16GB LPDDR5', 'short_value' => '16GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 14, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 14, 'attribute_id' => 4, 'value' => '14 inch 2.8K', 'short_value' => '14" 2.8K', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 14, 'attribute_id' => 5, 'value' => 'NVIDIA GeForce RTX 3050', 'short_value' => 'RTX 3050', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 14, 'attribute_id' => 6, 'value' => '4-cell 59Wh', 'short_value' => '59Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 14, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 14, 'attribute_id' => 8, 'value' => '1.5kg', 'short_value' => '1.5kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 14, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, Thunderbolt', 'short_value' => 'USB-C/A, HDMI, TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 14, 'attribute_id' => 74, 'value' => '1080p FHD', 'short_value' => '1080p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 14, 'attribute_id' => 132, 'value' => 'Acer', 'short_value' => 'Acer', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 15, 'attribute_id' => 1, 'value' => 'Intel Core i5-1340P', 'short_value' => 'i5-1340P', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 15, 'attribute_id' => 2, 'value' => '16GB LPDDR5', 'short_value' => '16GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 15, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 15, 'attribute_id' => 4, 'value' => '14 inch 2.8K OLED', 'short_value' => '14" OLED', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 15, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 15, 'attribute_id' => 6, 'value' => '4-cell 65Wh', 'short_value' => '65Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 15, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 15, 'attribute_id' => 8, 'value' => '1.3kg', 'short_value' => '1.3kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 15, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, Thunderbolt', 'short_value' => 'USB-C/A, HDMI, TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 15, 'attribute_id' => 74, 'value' => '1080p FHD', 'short_value' => '1080p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 15, 'attribute_id' => 132, 'value' => 'Acer', 'short_value' => 'Acer', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 16, 'attribute_id' => 1, 'value' => 'Intel Core i5-1235U', 'short_value' => 'i5-1235U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 16, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 16, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 16, 'attribute_id' => 4, 'value' => '15.6 inch Full HD', 'short_value' => '15.6" FHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 16, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 16, 'attribute_id' => 6, 'value' => '3-cell 42Wh', 'short_value' => '42Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 16, 'attribute_id' => 7, 'value' => 'Windows 11 Pro', 'short_value' => 'Win11 Pro', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 16, 'attribute_id' => 8, 'value' => '1.8kg', 'short_value' => '1.8kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 16, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, LAN', 'short_value' => 'USB-C/A, HDMI, LAN', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 16, 'attribute_id' => 74, 'value' => '720p HD', 'short_value' => '720p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 16, 'attribute_id' => 132, 'value' => 'Asus', 'short_value' => 'Asus', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 17, 'attribute_id' => 1, 'value' => 'Qualcomm Snapdragon X Elite', 'short_value' => 'Snapdragon X Elite', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 17, 'attribute_id' => 2, 'value' => '16GB LPDDR5X', 'short_value' => '16GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 17, 'attribute_id' => 3, 'value' => '1TB SSD', 'short_value' => '1TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 17, 'attribute_id' => 4, 'value' => '15.6 inch 3K OLED', 'short_value' => '15.6" OLED', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 17, 'attribute_id' => 5, 'value' => 'Qualcomm Adreno GPU', 'short_value' => 'Adreno GPU', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 17, 'attribute_id' => 6, 'value' => '4-cell 70Wh', 'short_value' => '70Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 17, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 17, 'attribute_id' => 8, 'value' => '1.5kg', 'short_value' => '1.5kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 17, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, Thunderbolt', 'short_value' => 'USB-C/A, HDMI, TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 17, 'attribute_id' => 74, 'value' => '1080p FHD', 'short_value' => '1080p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 17, 'attribute_id' => 132, 'value' => 'Asus', 'short_value' => 'Asus', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 18, 'attribute_id' => 1, 'value' => 'Intel Core i5-1235U', 'short_value' => 'i5-1235U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 18, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 18, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 18, 'attribute_id' => 4, 'value' => '14 inch Full HD', 'short_value' => '14" FHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 18, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 18, 'attribute_id' => 6, 'value' => '3-cell 50Wh', 'short_value' => '50Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 18, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 18, 'attribute_id' => 8, 'value' => '1.4kg', 'short_value' => '1.4kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 18, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI', 'short_value' => 'USB-C/A, HDMI', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 18, 'attribute_id' => 74, 'value' => '720p HD', 'short_value' => '720p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 18, 'attribute_id' => 132, 'value' => 'Asus', 'short_value' => 'Asus', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 19, 'attribute_id' => 1, 'value' => 'Intel Core i7-1355U', 'short_value' => 'i7-1355U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 19, 'attribute_id' => 2, 'value' => '16GB LPDDR5', 'short_value' => '16GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 19, 'attribute_id' => 3, 'value' => '1TB SSD', 'short_value' => '1TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 19, 'attribute_id' => 4, 'value' => '14 inch 2.8K OLED', 'short_value' => '14" OLED', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 19, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 19, 'attribute_id' => 6, 'value' => '4-cell 75Wh', 'short_value' => '75Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 19, 'attribute_id' => 7, 'value' => 'Windows 11 Pro', 'short_value' => 'Win11 Pro', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 19, 'attribute_id' => 8, 'value' => '1.3kg', 'short_value' => '1.3kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 19, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, Thunderbolt', 'short_value' => 'USB-C/A, HDMI, TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 19, 'attribute_id' => 74, 'value' => '1080p FHD', 'short_value' => '1080p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 19, 'attribute_id' => 132, 'value' => 'Asus', 'short_value' => 'Asus', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 20, 'attribute_id' => 1, 'value' => 'Intel Core i7-1355U', 'short_value' => 'i7-1355U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 20, 'attribute_id' => 2, 'value' => '16GB DDR4', 'short_value' => '16GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 20, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 20, 'attribute_id' => 4, 'value' => '14 inch Full HD', 'short_value' => '14" FHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 20, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 20, 'attribute_id' => 6, 'value' => '3-cell 50Wh', 'short_value' => '50Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 20, 'attribute_id' => 7, 'value' => 'Windows 11 Pro', 'short_value' => 'Win11 Pro', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 20, 'attribute_id' => 8, 'value' => '1.5kg', 'short_value' => '1.5kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 20, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI, LAN', 'short_value' => 'USB-C/A, HDMI, LAN', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 20, 'attribute_id' => 74, 'value' => '720p HD', 'short_value' => '720p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 20, 'attribute_id' => 132, 'value' => 'Asus', 'short_value' => 'Asus', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 21, 'attribute_id' => 1, 'value' => 'Intel Core i5-12400', 'short_value' => 'i5-12400', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 21, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 21, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 21, 'attribute_id' => 5, 'value' => 'Intel UHD Graphics 730', 'short_value' => 'UHD 730', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 21, 'attribute_id' => 9, 'value' => 'Intel B660', 'short_value' => 'B660', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 21, 'attribute_id' => 10, 'value' => '450W', 'short_value' => '450W', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 21, 'attribute_id' => 11, 'value' => 'Micro ATX Case', 'short_value' => 'Micro ATX', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 21, 'attribute_id' => 75, 'value' => 'Compact', 'short_value' => 'Compact', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 21, 'attribute_id' => 76, 'value' => 'Yes', 'short_value' => 'Y', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 21, 'attribute_id' => 132, 'value' => 'Custom', 'short_value' => 'Custom', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 22, 'attribute_id' => 1, 'value' => 'Intel Core i9-14900K', 'short_value' => 'i9-14900K', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 22, 'attribute_id' => 2, 'value' => '32GB DDR5', 'short_value' => '32GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 22, 'attribute_id' => 3, 'value' => '1TB SSD', 'short_value' => '1TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 22, 'attribute_id' => 5, 'value' => 'NVIDIA GeForce RTX 4060 Ti', 'short_value' => 'RTX 4060 Ti', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 22, 'attribute_id' => 9, 'value' => 'Intel Z790', 'short_value' => 'Z790', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 22, 'attribute_id' => 10, 'value' => '850W', 'short_value' => '850W', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 22, 'attribute_id' => 11, 'value' => 'ATX Case', 'short_value' => 'ATX', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 22, 'attribute_id' => 75, 'value' => 'Mid Tower', 'short_value' => 'Mid Tower', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 22, 'attribute_id' => 76, 'value' => 'Yes', 'short_value' => 'Y', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 22, 'attribute_id' => 132, 'value' => 'Intel', 'short_value' => 'Intel', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 23, 'attribute_id' => 1, 'value' => 'AMD Athlon 3000G', 'short_value' => 'Athlon 3000G', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 23, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 23, 'attribute_id' => 3, 'value' => '256GB SSD', 'short_value' => '256GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 23, 'attribute_id' => 5, 'value' => 'AMD Radeon Vega 3', 'short_value' => 'Vega 3', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 23, 'attribute_id' => 9, 'value' => 'AMD A320', 'short_value' => 'A320', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 23, 'attribute_id' => 10, 'value' => '350W', 'short_value' => '350W', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 23, 'attribute_id' => 11, 'value' => 'Micro ATX Case', 'short_value' => 'Micro ATX', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 23, 'attribute_id' => 75, 'value' => 'Compact', 'short_value' => 'Compact', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 23, 'attribute_id' => 76, 'value' => 'Limited', 'short_value' => 'Limited', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 23, 'attribute_id' => 132, 'value' => 'AMD', 'short_value' => 'AMD', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 24, 'attribute_id' => 1, 'value' => 'Intel Core i5-12400F', 'short_value' => 'i5-12400F', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 24, 'attribute_id' => 2, 'value' => '16GB DDR4', 'short_value' => '16GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 24, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 24, 'attribute_id' => 5, 'value' => 'NVIDIA GeForce RTX 5060', 'short_value' => 'RTX 5060', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 24, 'attribute_id' => 9, 'value' => 'Intel H610', 'short_value' => 'H610', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 24, 'attribute_id' => 10, 'value' => '650W', 'short_value' => '650W', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 24, 'attribute_id' => 11, 'value' => 'ATX Case', 'short_value' => 'ATX', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 24, 'attribute_id' => 75, 'value' => 'Mid Tower', 'short_value' => 'Mid Tower', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 24, 'attribute_id' => 76, 'value' => 'Yes', 'short_value' => 'Y', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 24, 'attribute_id' => 132, 'value' => 'Intel', 'short_value' => 'Intel', 'created_at' => now(), 'updated_at' => now()]);

        ProductAttribute::create(['product_id' => 25, 'attribute_id' => 1, 'value' => 'AMD Ryzen 5 5600X', 'short_value' => 'Ryzen 5 5600X', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 25, 'attribute_id' => 2, 'value' => '16GB DDR4', 'short_value' => '16GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 25, 'attribute_id' => 3, 'value' => '1TB SSD', 'short_value' => '1TB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 25, 'attribute_id' => 5, 'value' => 'NVIDIA GeForce RTX 3060', 'short_value' => 'RTX 3060', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 25, 'attribute_id' => 9, 'value' => 'AMD B550', 'short_value' => 'B550', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 25, 'attribute_id' => 10, 'value' => '650W', 'short_value' => '650W', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 25, 'attribute_id' => 11, 'value' => 'ATX Case', 'short_value' => 'ATX', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 25, 'attribute_id' => 75, 'value' => 'Mid Tower', 'short_value' => 'Mid Tower', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 25, 'attribute_id' => 76, 'value' => 'Yes', 'short_value' => 'Y', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 25, 'attribute_id' => 132, 'value' => 'AMD', 'short_value' => 'AMD', 'created_at' => now(), 'updated_at' => now()]);

        // Sạc Laptop ACER 90W 19V 4.74A 55x17mm TTA AC90
        ProductAttribute::create(['product_id' => 26, 'attribute_id' => 12, 'value' => '90W', 'short_value' => '90W']); // Công suất
        ProductAttribute::create(['product_id' => 26, 'attribute_id' => 13, 'value' => '19V', 'short_value' => '19V']); // Điện áp
        ProductAttribute::create(['product_id' => 26, 'attribute_id' => 14, 'value' => '4.74A', 'short_value' => '4.74A']); // Dòng điện
        ProductAttribute::create(['product_id' => 26, 'attribute_id' => 67, 'value' => '5.5x1.7mm', 'short_value' => '5.5x1.7mm']); // Đầu kết nối
        ProductAttribute::create(['product_id' => 26, 'attribute_id' => 77, 'value' => 'DC Barrel', 'short_value' => 'DC Barrel']); // Loại chân cắm
        ProductAttribute::create(['product_id' => 26, 'attribute_id' => 78, 'value' => '1.2m', 'short_value' => '1.2m']); // Chiều dài dây sạc
        ProductAttribute::create(['product_id' => 26, 'attribute_id' => 132, 'value' => 'HP', 'short_value' => 'HP']); // Hãng sản xuất

        // Sạc Laptop Asus 19V 3.42A chân thường 55mmx25mm, củ vuông
        ProductAttribute::create(['product_id' => 27, 'attribute_id' => 12, 'value' => '65W', 'short_value' => '65W']); // Công suất
        ProductAttribute::create(['product_id' => 27, 'attribute_id' => 13, 'value' => '19V', 'short_value' => '19V']); // Điện áp
        ProductAttribute::create(['product_id' => 27, 'attribute_id' => 14, 'value' => '3.42A', 'short_value' => '3.42A']); // Dòng điện
        ProductAttribute::create(['product_id' => 27, 'attribute_id' => 67, 'value' => '5.5x2.5mm', 'short_value' => '5.5x2.5mm']); // Đầu kết nối
        ProductAttribute::create(['product_id' => 27, 'attribute_id' => 77, 'value' => 'DC Barrel', 'short_value' => 'DC Barrel']); // Loại chân cắm
        ProductAttribute::create(['product_id' => 27, 'attribute_id' => 78, 'value' => '1.2m', 'short_value' => '1.2m']); // Chiều dài dây sạc
        ProductAttribute::create(['product_id' => 27, 'attribute_id' => 132, 'value' => 'Lenovo', 'short_value' => 'Lenovo']); // Hãng sản xuất

        // Sạc Laptop DELL OVAN 65W 19.5V 3.34A (45x30) CHÂN KIM NHỎ TTA DE65NM130
        ProductAttribute::create(['product_id' => 28, 'attribute_id' => 12, 'value' => '65W', 'short_value' => '65W']); // Công suất
        ProductAttribute::create(['product_id' => 28, 'attribute_id' => 13, 'value' => '19.5V', 'short_value' => '19.5V']); // Điện áp
        ProductAttribute::create(['product_id' => 28, 'attribute_id' => 14, 'value' => '3.34A', 'short_value' => '3.34A']); // Dòng điện
        ProductAttribute::create(['product_id' => 28, 'attribute_id' => 67, 'value' => '4.5x3.0mm', 'short_value' => '4.5x3.0mm']); // Đầu kết nối
        ProductAttribute::create(['product_id' => 28, 'attribute_id' => 77, 'value' => 'DC Barrel', 'short_value' => 'DC Barrel']); // Loại chân cắm
        ProductAttribute::create(['product_id' => 28, 'attribute_id' => 78, 'value' => '1.2m', 'short_value' => '1.2m']); // Chiều dài dây sạc
        ProductAttribute::create(['product_id' => 28, 'attribute_id' => 132, 'value' => 'Asus', 'short_value' => 'Asus']); // Hãng sản xuất

        // Màn hình Laptop 15.6 inch Slim 40 Pin narrow EDP IPS NE156FHM NZ1 240HZ
        ProductAttribute::create(['product_id' => 29, 'attribute_id' => 23, 'value' => '15.6 inch', 'short_value' => '15.6"']); // Màn hình
        ProductAttribute::create(['product_id' => 29, 'attribute_id' => 24, 'value' => '1920x1080', 'short_value' => 'FHD']); // Độ phân giải
        ProductAttribute::create(['product_id' => 29, 'attribute_id' => 25, 'value' => 'IPS', 'short_value' => 'IPS']); // Tấm nền
        ProductAttribute::create(['product_id' => 29, 'attribute_id' => 26, 'value' => '240Hz', 'short_value' => '240Hz']); // Tần số quét
        ProductAttribute::create(['product_id' => 29, 'attribute_id' => 83, 'value' => '300 nits', 'short_value' => '300 nits']); // Độ sáng
        ProductAttribute::create(['product_id' => 29, 'attribute_id' => 84, 'value' => 'Không', 'short_value' => 'No']); // Khả năng cảm ứng
        ProductAttribute::create(['product_id' => 29, 'attribute_id' => 132, 'value' => 'Không', 'short_value' => 'No']); // Hãng sản xuất

        // Màn hình Laptop 14 inch N140HCE G52 NV140FHM N47 30 Pin FHD
        ProductAttribute::create(['product_id' => 30, 'attribute_id' => 23, 'value' => '14 inch', 'short_value' => '14"']); // Màn hình
        ProductAttribute::create(['product_id' => 30, 'attribute_id' => 24, 'value' => '1920x1080', 'short_value' => 'FHD']); // Độ phân giải
        ProductAttribute::create(['product_id' => 30, 'attribute_id' => 25, 'value' => 'IPS', 'short_value' => 'IPS']); // Tấm nền
        ProductAttribute::create(['product_id' => 30, 'attribute_id' => 26, 'value' => '60Hz', 'short_value' => '60Hz']); // Tần số quét
        ProductAttribute::create(['product_id' => 30, 'attribute_id' => 83, 'value' => '250 nits', 'short_value' => '250 nits']); // Độ sáng
        ProductAttribute::create(['product_id' => 30, 'attribute_id' => 84, 'value' => 'Không', 'short_value' => 'No']); // Khả năng cảm ứng
        ProductAttribute::create(['product_id' => 30, 'attribute_id' => 132, 'value' => 'Không', 'short_value' => 'No']); // Hãng sản xuất

        // Màn hình laptop 14 inch Asus Vivobook TM420 N140HCA EAC FHD 60 Hz Gương 30 Pin Cảm Ứng
        ProductAttribute::create(['product_id' => 31, 'attribute_id' => 23, 'value' => '14 inch', 'short_value' => '14"']); // Màn hình
        ProductAttribute::create(['product_id' => 31, 'attribute_id' => 24, 'value' => '1920x1080', 'short_value' => 'FHD']); // Độ phân giải
        ProductAttribute::create(['product_id' => 31, 'attribute_id' => 25, 'value' => 'IPS', 'short_value' => 'IPS']); // Tấm nền
        ProductAttribute::create(['product_id' => 31, 'attribute_id' => 26, 'value' => '60Hz', 'short_value' => '60Hz']); // Tần số quét
        ProductAttribute::create(['product_id' => 31, 'attribute_id' => 83, 'value' => '250 nits', 'short_value' => '250 nits']); // Độ sáng
        ProductAttribute::create(['product_id' => 31, 'attribute_id' => 84, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng cảm ứng
        ProductAttribute::create(['product_id' => 31, 'attribute_id' => 132, 'value' => 'Asus', 'short_value' => 'Asus']); // Hãng sản xuất

        // RAM Laptop Kingston 128GB 3200MHz KVR32S22S8 8
        ProductAttribute::create(['product_id' => 32, 'attribute_id' => 2, 'value' => '8GB', 'short_value' => '8GB']); // RAM
        ProductAttribute::create(['product_id' => 32, 'attribute_id' => 21, 'value' => 'DDR4', 'short_value' => 'DDR4']); // Loại RAM
        ProductAttribute::create(['product_id' => 32, 'attribute_id' => 22, 'value' => '3200MHz', 'short_value' => '3200MHz']); // Bus RAM
        ProductAttribute::create(['product_id' => 32, 'attribute_id' => 82, 'value' => '1 khe', 'short_value' => '1 slot']); // Số khe RAM Laptop hỗ trợ
        ProductAttribute::create(['product_id' => 32, 'attribute_id' => 132, 'value' => 'Kingston', 'short_value' => 'Kingston']); // Hãng sản xuất

        // RAM Laptop Lexar 8GB 3200MHZ DDR4 CL22
        ProductAttribute::create(['product_id' => 33, 'attribute_id' => 2, 'value' => '8GB', 'short_value' => '8GB']); // RAM
        ProductAttribute::create(['product_id' => 33, 'attribute_id' => 21, 'value' => 'DDR4', 'short_value' => 'DDR4']); // Loại RAM
        ProductAttribute::create(['product_id' => 33, 'attribute_id' => 22, 'value' => '3200MHz', 'short_value' => '3200MHz']); // Bus RAM
        ProductAttribute::create(['product_id' => 33, 'attribute_id' => 82, 'value' => '1 khe', 'short_value' => '1 slot']); // Số khe RAM Laptop hỗ trợ
        ProductAttribute::create(['product_id' => 33, 'attribute_id' => 132, 'value' => 'Lexar', 'short_value' => 'Lexar']); // Hãng sản xuất

        // RAM PC ADATA XPG D50 RGB 16GB 3200MHz DDR4
        ProductAttribute::create(['product_id' => 34, 'attribute_id' => 2, 'value' => '16GB', 'short_value' => '16GB']); // RAM
        ProductAttribute::create(['product_id' => 34, 'attribute_id' => 21, 'value' => 'DDR4', 'short_value' => 'DDR4']); // Loại RAM
        ProductAttribute::create(['product_id' => 34, 'attribute_id' => 22, 'value' => '3200MHz', 'short_value' => '3200MHz']); // Bus RAM
        ProductAttribute::create(['product_id' => 34, 'attribute_id' => 91, 'value' => 'Có', 'short_value' => 'Yes']); // Hỗ trợ XMP/EXPO
        ProductAttribute::create(['product_id' => 34, 'attribute_id' => 132, 'value' => 'ADATA', 'short_value' => 'ADATA']); // Hãng sản xuất

        // Ổ cứng SSD Kingston NV3 PCIe 4.0 NVMe 1TB
        ProductAttribute::create(['product_id' => 35, 'attribute_id' => 3, 'value' => '1TB', 'short_value' => '1TB']); // Ổ cứng
        ProductAttribute::create(['product_id' => 35, 'attribute_id' => 19, 'value' => 'PCIe 4.0 NVMe', 'short_value' => 'PCIe 4.0']); // Chuẩn kết nối
        ProductAttribute::create(['product_id' => 35, 'attribute_id' => 20, 'value' => '3500MB/s đọc, 2800MB/s ghi', 'short_value' => '3500/2800MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 35, 'attribute_id' => 81, 'value' => 'SSD', 'short_value' => 'SSD']); // Loại ổ HDD/SSD
        ProductAttribute::create(['product_id' => 35, 'attribute_id' => 132, 'value' => 'Kingston', 'short_value' => 'Kingston']); // Hãng sản xuất

        // Ổ cứng SSD ADATA SU650 SATA III 2.5 512GB
        ProductAttribute::create(['product_id' => 36, 'attribute_id' => 3, 'value' => '512GB', 'short_value' => '512GB']); // Ổ cứng
        ProductAttribute::create(['product_id' => 36, 'attribute_id' => 19, 'value' => 'SATA III', 'short_value' => 'SATA III']); // Chuẩn kết nối
        ProductAttribute::create(['product_id' => 36, 'attribute_id' => 20, 'value' => '520MB/s đọc, 450MB/s ghi', 'short_value' => '520/450MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 36, 'attribute_id' => 81, 'value' => 'SSD', 'short_value' => 'SSD']); // Loại ổ HDD/SSD
        ProductAttribute::create(['product_id' => 36, 'attribute_id' => 132, 'value' => 'ADATA', 'short_value' => 'ADATA']); // Hãng sản xuất

        // Ổ cứng SSD ADATA LEGEND 860 PCIE GEN4 X4 M2 2280 R6000 W5000 500GB
        ProductAttribute::create(['product_id' => 37, 'attribute_id' => 3, 'value' => '500GB', 'short_value' => '500GB']); // Ổ cứng
        ProductAttribute::create(['product_id' => 37, 'attribute_id' => 19, 'value' => 'PCIe Gen4 x4', 'short_value' => 'PCIe Gen4']); // Chuẩn kết nối
        ProductAttribute::create(['product_id' => 37, 'attribute_id' => 20, 'value' => '6000MB/s đọc, 5000MB/s ghi', 'short_value' => '6000/5000MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 37, 'attribute_id' => 81, 'value' => 'SSD', 'short_value' => 'SSD']); // Loại ổ HDD/SSD
        ProductAttribute::create(['product_id' => 37, 'attribute_id' => 132, 'value' => 'ADATA', 'short_value' => 'ADATA']); // Hãng sản xuất

        // ================= Bàn phím Laptop Acer Aspire =================
        ProductAttribute::create(['product_id' => 38, 'attribute_id' => 16, 'value' => 'Chiclet', 'short_value' => 'Chiclet']); // Loại bàn phím
        ProductAttribute::create(['product_id' => 38, 'attribute_id' => 17, 'value' => 'Không', 'short_value' => 'No']); // Đèn nền
        ProductAttribute::create(['product_id' => 38, 'attribute_id' => 18, 'value' => 'US', 'short_value' => 'US']); // Ngôn ngữ layout
        ProductAttribute::create(['product_id' => 38, 'attribute_id' => 80, 'value' => 'Có', 'short_value' => 'Yes']); // Bàn phím số phụ
        ProductAttribute::create(['product_id' => 38, 'attribute_id' => 79, 'value' => 'Có', 'short_value' => 'Yes']); // Touchpad
        ProductAttribute::create(['product_id' => 38, 'attribute_id' => 132, 'value' => 'Acer', 'short_value' => 'Acer']); // Hãng sản xuất

        // ================= Bàn phím Laptop Toshiba =================
        ProductAttribute::create(['product_id' => 39, 'attribute_id' => 16, 'value' => 'Chiclet', 'short_value' => 'Chiclet']);
        ProductAttribute::create(['product_id' => 39, 'attribute_id' => 17, 'value' => 'Không', 'short_value' => 'No']);
        ProductAttribute::create(['product_id' => 39, 'attribute_id' => 18, 'value' => 'US', 'short_value' => 'US']);
        ProductAttribute::create(['product_id' => 39, 'attribute_id' => 80, 'value' => 'Có', 'short_value' => 'Yes']);
        ProductAttribute::create(['product_id' => 39, 'attribute_id' => 79, 'value' => 'Có', 'short_value' => 'Yes']);
        ProductAttribute::create(['product_id' => 39, 'attribute_id' => 132, 'value' => 'Toshiba', 'short_value' => 'Toshiba']);

        // ================= Bàn phím Laptop Asus =================
        ProductAttribute::create(['product_id' => 40, 'attribute_id' => 16, 'value' => 'Chiclet', 'short_value' => 'Chiclet']);
        ProductAttribute::create(['product_id' => 40, 'attribute_id' => 17, 'value' => 'Không', 'short_value' => 'No']);
        ProductAttribute::create(['product_id' => 40, 'attribute_id' => 18, 'value' => 'US', 'short_value' => 'US']);
        ProductAttribute::create(['product_id' => 40, 'attribute_id' => 80, 'value' => 'Có', 'short_value' => 'Yes']);
        ProductAttribute::create(['product_id' => 40, 'attribute_id' => 79, 'value' => 'Có', 'short_value' => 'Yes']);
        ProductAttribute::create(['product_id' => 40, 'attribute_id' => 132, 'value' => 'Asus', 'short_value' => 'Asus']);


        // Màn hình thông minh LG MyView 25SR50F 25 inch
        ProductAttribute::create(['product_id' => 41, 'attribute_id' => 23, 'value' => '25 inch', 'short_value' => '25"']); // Màn hình
        ProductAttribute::create(['product_id' => 41, 'attribute_id' => 24, 'value' => '1920x1080', 'short_value' => 'FHD']); // Độ phân giải
        ProductAttribute::create(['product_id' => 41, 'attribute_id' => 25, 'value' => 'IPS', 'short_value' => 'IPS']); // Tấm nền
        ProductAttribute::create(['product_id' => 41, 'attribute_id' => 26, 'value' => '60Hz', 'short_value' => '60Hz']); // Tần số quét
        ProductAttribute::create(['product_id' => 41, 'attribute_id' => 83, 'value' => '250 nits', 'short_value' => '250 nits']); // Độ sáng
        ProductAttribute::create(['product_id' => 41, 'attribute_id' => 96, 'value' => '5ms', 'short_value' => '5ms']); // Thời gian phản hồi
        ProductAttribute::create(['product_id' => 41, 'attribute_id' => 97, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng xoay dọc
        ProductAttribute::create(['product_id' => 41, 'attribute_id' => 132, 'value' => 'LG', 'short_value' => 'LG']); // Hãng sản xuất

        // Màn hình văn phòng Dell U2424H 24 inch
        ProductAttribute::create(['product_id' => 42, 'attribute_id' => 23, 'value' => '24 inch', 'short_value' => '24"']); // Màn hình
        ProductAttribute::create(['product_id' => 42, 'attribute_id' => 24, 'value' => '1920x1080', 'short_value' => 'FHD']); // Độ phân giải
        ProductAttribute::create(['product_id' => 42, 'attribute_id' => 25, 'value' => 'IPS', 'short_value' => 'IPS']); // Tấm nền
        ProductAttribute::create(['product_id' => 42, 'attribute_id' => 26, 'value' => '60Hz', 'short_value' => '60Hz']); // Tần số quét
        ProductAttribute::create(['product_id' => 42, 'attribute_id' => 83, 'value' => '250 nits', 'short_value' => '250 nits']); // Độ sáng
        ProductAttribute::create(['product_id' => 42, 'attribute_id' => 96, 'value' => '5ms', 'short_value' => '5ms']); // Thời gian phản hồi
        ProductAttribute::create(['product_id' => 42, 'attribute_id' => 97, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng xoay dọc
        ProductAttribute::create(['product_id' => 42, 'attribute_id' => 132, 'value' => 'Dell', 'short_value' => 'Dell']); // Hãng sản xuất

        // Màn hình Xiaomi A27QI 27 inch
        ProductAttribute::create(['product_id' => 43, 'attribute_id' => 23, 'value' => '27 inch', 'short_value' => '27"']); // Màn hình
        ProductAttribute::create(['product_id' => 43, 'attribute_id' => 24, 'value' => '2560x1440', 'short_value' => 'QHD']); // Độ phân giải
        ProductAttribute::create(['product_id' => 43, 'attribute_id' => 25, 'value' => 'IPS', 'short_value' => 'IPS']); // Tấm nền
        ProductAttribute::create(['product_id' => 43, 'attribute_id' => 26, 'value' => '75Hz', 'short_value' => '75Hz']); // Tần số quét
        ProductAttribute::create(['product_id' => 43, 'attribute_id' => 83, 'value' => '350 nits', 'short_value' => '350 nits']); // Độ sáng
        ProductAttribute::create(['product_id' => 43, 'attribute_id' => 96, 'value' => '6ms', 'short_value' => '6ms']); // Thời gian phản hồi
        ProductAttribute::create(['product_id' => 43, 'attribute_id' => 97, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng xoay dọc
        ProductAttribute::create(['product_id' => 43, 'attribute_id' => 132, 'value' => 'Xiaomi', 'short_value' => 'Xiaomi']); // Hãng sản xuất

        // Quạt led Xigmatek Infinity Reverse 120mm Fan Fixed RGB
        ProductAttribute::create(['product_id' => 44, 'attribute_id' => 39, 'value' => '25 dB', 'short_value' => '25 dB']); // Độ ồn
        ProductAttribute::create(['product_id' => 44, 'attribute_id' => 40, 'value' => '1200RPM', 'short_value' => '1200RPM']); // Tốc độ quay
        ProductAttribute::create(['product_id' => 44, 'attribute_id' => 92, 'value' => 'Air', 'short_value' => 'Air']); // Loại tản nhiệt
        ProductAttribute::create(['product_id' => 44, 'attribute_id' => 93, 'value' => 'Có', 'short_value' => 'Yes']); // LED RGB
        ProductAttribute::create(['product_id' => 44, 'attribute_id' => 132, 'value' => 'Xigmatek', 'short_value' => 'Xigmatek']); // Hãng sản xuất

        // Tản nhiệt nước Cooler Master ML240L V2 RGB
        ProductAttribute::create(['product_id' => 45, 'attribute_id' => 39, 'value' => '27 dB', 'short_value' => '27 dB']); // Độ ồn
        ProductAttribute::create(['product_id' => 45, 'attribute_id' => 40, 'value' => '1800RPM', 'short_value' => '1800RPM']); // Tốc độ quay
        ProductAttribute::create(['product_id' => 45, 'attribute_id' => 92, 'value' => 'Liquid', 'short_value' => 'Liquid']); // Loại tản nhiệt
        ProductAttribute::create(['product_id' => 45, 'attribute_id' => 93, 'value' => 'Có', 'short_value' => 'Yes']); // LED RGB
        ProductAttribute::create(['product_id' => 45, 'attribute_id' => 132, 'value' => 'Cooler Master', 'short_value' => 'Cooler Master']); // Hãng sản xuất

        // Tản nhiệt nước AIO DeepCool Mystique 240
        ProductAttribute::create(['product_id' => 46, 'attribute_id' => 39, 'value' => '28 dB', 'short_value' => '28 dB']); // Độ ồn
        ProductAttribute::create(['product_id' => 46, 'attribute_id' => 40, 'value' => '2000RPM', 'short_value' => '2000RPM']); // Tốc độ quay
        ProductAttribute::create(['product_id' => 46, 'attribute_id' => 92, 'value' => 'Liquid', 'short_value' => 'Liquid']); // Loại tản nhiệt
        ProductAttribute::create(['product_id' => 46, 'attribute_id' => 93, 'value' => 'Có', 'short_value' => 'Yes']); // LED RGB
        ProductAttribute::create(['product_id' => 46, 'attribute_id' => 132, 'value' => 'DeepCool', 'short_value' => 'DeepCool']); // Hãng sản xuất

        // RAM PC Kingston Fury Beast Black 16GB 3200MHz DDR4 KF432C16BB1 16
        ProductAttribute::create(['product_id' => 47, 'attribute_id' => 2, 'value' => '16GB', 'short_value' => '16GB']); // RAM
        ProductAttribute::create(['product_id' => 47, 'attribute_id' => 21, 'value' => 'DDR4', 'short_value' => 'DDR4']); // Loại RAM
        ProductAttribute::create(['product_id' => 47, 'attribute_id' => 22, 'value' => '3200MHz', 'short_value' => '3200MHz']); // Bus RAM
        ProductAttribute::create(['product_id' => 47, 'attribute_id' => 88, 'value' => 'Có', 'short_value' => 'Yes']); // Hỗ trợ XMP/EXPO
        ProductAttribute::create(['product_id' => 47, 'attribute_id' => 132, 'value' => 'Kingston', 'short_value' => 'Kingston']); // Hãng sản xuất

        // RAM PC ADATA XPG D50 RGB 16GB 1x16GB 3200MHz DDR4
        ProductAttribute::create(['product_id' => 48, 'attribute_id' => 2, 'value' => '16GB', 'short_value' => '16GB']); // RAM
        ProductAttribute::create(['product_id' => 48, 'attribute_id' => 21, 'value' => 'DDR4', 'short_value' => 'DDR4']); // Loại RAM
        ProductAttribute::create(['product_id' => 48, 'attribute_id' => 22, 'value' => '3200MHz', 'short_value' => '3200MHz']); // Bus RAM
        ProductAttribute::create(['product_id' => 48, 'attribute_id' => 91, 'value' => 'Có', 'short_value' => 'Yes']); // Hỗ trợ XMP/EXPO
        ProductAttribute::create(['product_id' => 48, 'attribute_id' => 132, 'value' => 'ADATA', 'short_value' => 'ADATA']); // Hãng sản xuất

        // RAM PC Kingston Fury 8GB 3200MHz KF432C16BB 8
        ProductAttribute::create(['product_id' => 49, 'attribute_id' => 2, 'value' => '8GB', 'short_value' => '8GB']); // RAM
        ProductAttribute::create(['product_id' => 49, 'attribute_id' => 21, 'value' => 'DDR4', 'short_value' => 'DDR4']); // Loại RAM
        ProductAttribute::create(['product_id' => 49, 'attribute_id' => 22, 'value' => '3200MHz', 'short_value' => '3200MHz']); // Bus RAM
        ProductAttribute::create(['product_id' => 49, 'attribute_id' => 91, 'value' => 'Có', 'short_value' => 'Yes']); // Hỗ trợ XMP/EXPO
        ProductAttribute::create(['product_id' => 49, 'attribute_id' => 132, 'value' => 'Kingston', 'short_value' => 'Kingston']); // Hãng sản xuất

        // Case máy tính Xigmatek MYX 3F 3 FAN M ATX
        ProductAttribute::create(['product_id' => 50, 'attribute_id' => 11, 'value' => 'Mid Tower ATX', 'short_value' => 'Mid ATX']); // Case
        ProductAttribute::create(['product_id' => 50, 'attribute_id' => 23, 'value' => '450x200x450mm', 'short_value' => '450x200x450mm']); // Kích thước
        ProductAttribute::create(['product_id' => 50, 'attribute_id' => 29, 'value' => 'Thép, kính cường lực', 'short_value' => 'Steel, Glass']); // Chất liệu
        ProductAttribute::create(['product_id' => 50, 'attribute_id' => 30, 'value' => 'ATX, Micro-ATX', 'short_value' => 'ATX, mATX']); // Hỗ trợ mainboard
        ProductAttribute::create(['product_id' => 50, 'attribute_id' => 86, 'value' => '3 quạt', 'short_value' => '3 fans']); // Số quạt tích hợp
        ProductAttribute::create(['product_id' => 50, 'attribute_id' => 87, 'value' => 'USB 3.0, Audio', 'short_value' => 'USB 3.0, Audio']); // Cổng I/O mặt trước
        ProductAttribute::create(['product_id' => 50, 'attribute_id' => 132, 'value' => 'Xigmatek', 'short_value' => 'Xigmatek']); // Hãng sản xuất

        // Case máy tính DeepCool Macube 110
        ProductAttribute::create(['product_id' => 51, 'attribute_id' => 11, 'value' => 'Micro-ATX', 'short_value' => 'mATX']); // Case
        ProductAttribute::create(['product_id' => 51, 'attribute_id' => 23, 'value' => '400x225x431mm', 'short_value' => '400x225x431mm']); // Kích thước
        ProductAttribute::create(['product_id' => 51, 'attribute_id' => 29, 'value' => 'Thép, kính cường lực', 'short_value' => 'Steel, Glass']); // Chất liệu
        ProductAttribute::create(['product_id' => 51, 'attribute_id' => 30, 'value' => 'Micro-ATX, Mini-ITX', 'short_value' => 'mATX, Mini-ITX']); // Hỗ trợ mainboard
        ProductAttribute::create(['product_id' => 51, 'attribute_id' => 86, 'value' => '1 quạt', 'short_value' => '1 fan']); // Số quạt tích hợp
        ProductAttribute::create(['product_id' => 51, 'attribute_id' => 87, 'value' => 'USB 3.0, Audio', 'short_value' => 'USB 3.0, Audio']); // Cổng I/O mặt trước
        ProductAttribute::create(['product_id' => 51, 'attribute_id' => 132, 'value' => 'DeepCool', 'short_value' => 'DeepCool']); // Hãng sản xuất

        // Case máy tính MSI MAG FORGE 320R AIRFLOW
        ProductAttribute::create(['product_id' => 52, 'attribute_id' => 11, 'value' => 'Mid Tower ATX', 'short_value' => 'Mid ATX']); // Case
        ProductAttribute::create(['product_id' => 52, 'attribute_id' => 23, 'value' => '473x106x498mm', 'short_value' => '473x106x498mm']); // Kích thước
        ProductAttribute::create(['product_id' => 52, 'attribute_id' => 29, 'value' => 'Thép, kính cường lực', 'short_value' => 'Steel, Glass']); // Chất liệu
        ProductAttribute::create(['product_id' => 52, 'attribute_id' => 30, 'value' => 'ATX, Micro-ATX, Mini-ITX', 'short_value' => 'ATX, mATX, Mini-ITX']); // Hỗ trợ mainboard
        ProductAttribute::create(['product_id' => 52, 'attribute_id' => 86, 'value' => '4 quạt', 'short_value' => '4 fans']); // Số quạt tích hợp
        ProductAttribute::create(['product_id' => 52, 'attribute_id' => 87, 'value' => 'USB 3.2 Gen1, Audio', 'short_value' => 'USB 3.2, Audio']); // Cổng I/O mặt trước
        ProductAttribute::create(['product_id' => 52, 'attribute_id' => 132, 'value' => 'MSI', 'short_value' => 'MSI']); // Hãng sản xuất

        // Nguồn máy tính Xigmatek X Power III 650 600W
        ProductAttribute::create(['product_id' => 53, 'attribute_id' => 10, 'value' => '600W', 'short_value' => '600W']); // PSU
        ProductAttribute::create(['product_id' => 53, 'attribute_id' => 12, 'value' => '600W', 'short_value' => '600W']); // Công suất
        ProductAttribute::create(['product_id' => 53, 'attribute_id' => 27, 'value' => '80 Plus Bronze', 'short_value' => '80+ Bronze']); // Chuẩn hiệu suất
        ProductAttribute::create(['product_id' => 53, 'attribute_id' => 28, 'value' => '1x 20+4 pin, 1x 4+4 pin, 2x PCIe', 'short_value' => '20+4 pin, 4+4 pin, 2x PCIe']); // Số đầu cấp nguồn
        ProductAttribute::create(['product_id' => 53, 'attribute_id' => 85, 'value' => 'OPP, OVP, SCP', 'short_value' => 'OPP, OVP, SCP']); // Chuẩn bảo vệ an toàn
        ProductAttribute::create(['product_id' => 53, 'attribute_id' => 132, 'value' => 'Xigmatek', 'short_value' => 'Xigmatek']); // Hãng sản xuất

        // Nguồn máy tính MSI Mag A650BNL Đen 650W
        ProductAttribute::create(['product_id' => 54, 'attribute_id' => 10, 'value' => '650W', 'short_value' => '650W']); // PSU
        ProductAttribute::create(['product_id' => 54, 'attribute_id' => 12, 'value' => '650W', 'short_value' => '650W']); // Công suất
        ProductAttribute::create(['product_id' => 54, 'attribute_id' => 27, 'value' => '80 Plus Bronze', 'short_value' => '80+ Bronze']); // Chuẩn hiệu suất
        ProductAttribute::create(['product_id' => 54, 'attribute_id' => 28, 'value' => '1x 20+4 pin, 1x 4+4 pin, 2x PCIe', 'short_value' => '20+4 pin, 4+4 pin, 2x PCIe']); // Số đầu cấp nguồn
        ProductAttribute::create(['product_id' => 54, 'attribute_id' => 85, 'value' => 'OPP, OVP, OCP, SCP', 'short_value' => 'OPP, OVP, OCP, SCP']); // Chuẩn bảo vệ an toàn
        ProductAttribute::create(['product_id' => 54, 'attribute_id' => 132, 'value' => 'MSI', 'short_value' => 'MSI']); // Hãng sản xuất

        // Nguồn máy tính Gigabyte P650SS 650W
        ProductAttribute::create(['product_id' => 55, 'attribute_id' => 10, 'value' => '650W', 'short_value' => '650W']); // PSU
        ProductAttribute::create(['product_id' => 55, 'attribute_id' => 12, 'value' => '650W', 'short_value' => '650W']); // Công suất
        ProductAttribute::create(['product_id' => 55, 'attribute_id' => 27, 'value' => '80 Plus Bronze', 'short_value' => '80+ Bronze']); // Chuẩn hiệu suất
        ProductAttribute::create(['product_id' => 55, 'attribute_id' => 28, 'value' => '1x 20+4 pin, 1x 4+4 pin, 2x PCIe', 'short_value' => '20+4 pin, 4+4 pin, 2x PCIe']); // Số đầu cấp nguồn
        ProductAttribute::create(['product_id' => 55, 'attribute_id' => 85, 'value' => 'OPP, OVP, SCP', 'short_value' => 'OPP, OVP, SCP']); // Chuẩn bảo vệ an toàn
        ProductAttribute::create(['product_id' => 55, 'attribute_id' => 132, 'value' => 'Gigabyte', 'short_value' => 'Gygabyte']); // Hãng sản xuất

        // Mainboard Gigabyte B760M Gaming Plus Wifi D4
        ProductAttribute::create(['product_id' => 56, 'attribute_id' => 9, 'value' => 'B760M Gaming Plus Wifi D4', 'short_value' => 'B760M']); // Mainboard
        ProductAttribute::create(['product_id' => 56, 'attribute_id' => 31, 'value' => 'LGA 1700', 'short_value' => 'LGA 1700']); // Socket
        ProductAttribute::create(['product_id' => 56, 'attribute_id' => 32, 'value' => 'Intel B760', 'short_value' => 'B760']); // Chipset
        ProductAttribute::create(['product_id' => 56, 'attribute_id' => 33, 'value' => '4 khe', 'short_value' => '4 slots']); // Khe RAM
        ProductAttribute::create(['product_id' => 56, 'attribute_id' => 34, 'value' => 'HDMI, DP, USB 3.2', 'short_value' => 'HDMI, DP, USB 3.2']); // Cổng kết nối
        ProductAttribute::create(['product_id' => 56, 'attribute_id' => 88, 'value' => 'Không', 'short_value' => 'No']); // Hỗ trợ đa GPU
        ProductAttribute::create(['product_id' => 56, 'attribute_id' => 132, 'value' => 'Gygabyte', 'short_value' => 'Gygabyte']); // Hãng sản xuất

        // Mainboard Asus TUF Gaming B760M PLUS Wifi D4
        ProductAttribute::create(['product_id' => 57, 'attribute_id' => 9, 'value' => 'TUF Gaming B760M PLUS Wifi D4', 'short_value' => 'B760M TUF']); // Mainboard
        ProductAttribute::create(['product_id' => 57, 'attribute_id' => 30, 'value' => 'Micro-ATX', 'short_value' => 'mATX']); // Hỗ trợ mainboard
        ProductAttribute::create(['product_id' => 57, 'attribute_id' => 31, 'value' => 'LGA 1700', 'short_value' => 'LGA 1700']); // Socket
        ProductAttribute::create(['product_id' => 57, 'attribute_id' => 32, 'value' => 'Intel B760', 'short_value' => 'B760']); // Chipset
        ProductAttribute::create(['product_id' => 57, 'attribute_id' => 33, 'value' => '4 khe', 'short_value' => '4 slots']); // Khe RAM
        ProductAttribute::create(['product_id' => 57, 'attribute_id' => 34, 'value' => 'HDMI, DP, USB 3.2', 'short_value' => 'HDMI, DP, USB 3.2']); // Cổng kết nối
        ProductAttribute::create(['product_id' => 57, 'attribute_id' => 88, 'value' => 'Có', 'short_value' => 'Yes']); // Hỗ trợ đa GPU
        ProductAttribute::create(['product_id' => 57, 'attribute_id' => 132, 'value' => 'Gygabyte', 'short_value' => 'Gygabyte']); // Hãng sản xuất

        // Mainboard MSI Pro B760M E DDR4
        ProductAttribute::create(['product_id' => 58, 'attribute_id' => 9, 'value' => 'Pro B760M E DDR4', 'short_value' => 'B760M Pro']); // Mainboard
        ProductAttribute::create(['product_id' => 58, 'attribute_id' => 30, 'value' => 'Micro-ATX', 'short_value' => 'mATX']); // Hỗ trợ mainboard
        ProductAttribute::create(['product_id' => 58, 'attribute_id' => 31, 'value' => 'LGA 1700', 'short_value' => 'LGA 1700']); // Socket
        ProductAttribute::create(['product_id' => 58, 'attribute_id' => 32, 'value' => 'Intel B760', 'short_value' => 'B760']); // Chipset
        ProductAttribute::create(['product_id' => 58, 'attribute_id' => 33, 'value' => '2 khe', 'short_value' => '2 slots']); // Khe RAM
        ProductAttribute::create(['product_id' => 58, 'attribute_id' => 34, 'value' => 'HDMI, VGA, USB 3.2', 'short_value' => 'HDMI, VGA, USB 3.2']); // Cổng kết nối
        ProductAttribute::create(['product_id' => 58, 'attribute_id' => 88, 'value' => 'Không', 'short_value' => 'No']); // Hỗ trợ đa GPU
        ProductAttribute::create(['product_id' => 58, 'attribute_id' => 132, 'value' => 'MSI', 'short_value' => 'MSI']); // Hãng sản xuất

        // VGA Asus Dual Radeon RX 6500 XT OC 4GB DUAL RX6500XT O4G V2
        ProductAttribute::create(['product_id' => 59, 'attribute_id' => 5, 'value' => 'Radeon RX 6500 XT', 'short_value' => 'RX 6500 XT']); // Card đồ họa
        ProductAttribute::create(['product_id' => 59, 'attribute_id' => 41, 'value' => '4GB', 'short_value' => '4GB']); // Dung lượng VRAM
        ProductAttribute::create(['product_id' => 59, 'attribute_id' => 42, 'value' => 'GDDR6', 'short_value' => 'GDDR6']); // Loại bộ nhớ
        ProductAttribute::create(['product_id' => 59, 'attribute_id' => 43, 'value' => 'HDMI 2.1, DP 1.4a', 'short_value' => 'HDMI, DP']); // Cổng xuất hình
        ProductAttribute::create(['product_id' => 59, 'attribute_id' => 44, 'value' => '107W', 'short_value' => '107W']); // TDP
        ProductAttribute::create(['product_id' => 59, 'attribute_id' => 94, 'value' => 'PCIe 4.0', 'short_value' => 'PCIe 4.0']); // Chuẩn giao tiếp
        ProductAttribute::create(['product_id' => 59, 'attribute_id' => 95, 'value' => '201mm', 'short_value' => '201mm']); // Độ dài card
        ProductAttribute::create(['product_id' => 59, 'attribute_id' => 132, 'value' => 'Asus', 'short_value' => 'Asus']); // Hãng sản xuất

        // VGA MSI GeForce RTX 3060 VENTUS 2X 12G OC
        ProductAttribute::create(['product_id' => 60, 'attribute_id' => 5, 'value' => 'GeForce RTX 3060', 'short_value' => 'RTX 3060']); // Card đồ họa
        ProductAttribute::create(['product_id' => 60, 'attribute_id' => 41, 'value' => '12GB', 'short_value' => '12GB']); // Dung lượng VRAM
        ProductAttribute::create(['product_id' => 60, 'attribute_id' => 42, 'value' => 'GDDR6', 'short_value' => 'GDDR6']); // Loại bộ nhớ
        ProductAttribute::create(['product_id' => 60, 'attribute_id' => 43, 'value' => 'HDMI 2.1, DP 1.4a', 'short_value' => 'HDMI, DP']); // Cổng xuất hình
        ProductAttribute::create(['product_id' => 60, 'attribute_id' => 44, 'value' => '170W', 'short_value' => '170W']); // TDP
        ProductAttribute::create(['product_id' => 60, 'attribute_id' => 94, 'value' => 'PCIe 4.0', 'short_value' => 'PCIe 4.0']); // Chuẩn giao tiếp
        ProductAttribute::create(['product_id' => 60, 'attribute_id' => 95, 'value' => '235mm', 'short_value' => '235mm']); // Độ dài card
        ProductAttribute::create(['product_id' => 60, 'attribute_id' => 132, 'value' => 'MSI', 'short_value' => 'MSI']); // Hãng sản xuất

        // VGA Gigabyte Radeon RX 6500 XT Eagle 4GB GV R65XTEAGLE 4GD
        ProductAttribute::create(['product_id' => 61, 'attribute_id' => 5, 'value' => 'Radeon RX 6500 XT', 'short_value' => 'RX 6500 XT']); // Card đồ họa
        ProductAttribute::create(['product_id' => 61, 'attribute_id' => 41, 'value' => '4GB', 'short_value' => '4GB']); // Dung lượng VRAM
        ProductAttribute::create(['product_id' => 61, 'attribute_id' => 42, 'value' => 'GDDR6', 'short_value' => 'GDDR6']); // Loại bộ nhớ
        ProductAttribute::create(['product_id' => 61, 'attribute_id' => 43, 'value' => 'HDMI 2.1, DP 1.4a', 'short_value' => 'HDMI, DP']); // Cổng xuất hình
        ProductAttribute::create(['product_id' => 61, 'attribute_id' => 44, 'value' => '107W', 'short_value' => '107W']); // TDP
        ProductAttribute::create(['product_id' => 61, 'attribute_id' => 94, 'value' => 'PCIe 4.0', 'short_value' => 'PCIe 4.0']); // Chuẩn giao tiếp
        ProductAttribute::create(['product_id' => 61, 'attribute_id' => 95, 'value' => '192mm', 'short_value' => '192mm']); // Độ dài card
        ProductAttribute::create(['product_id' => 61, 'attribute_id' => 132, 'value' => 'Gigabyte', 'short_value' => 'Gigabyte']); // Hãng sản xuất

        // CPU Intel Core i5 12400F
        ProductAttribute::create(['product_id' => 62, 'attribute_id' => 1, 'value' => 'Core i5 12400F', 'short_value' => 'i5 12400F']); // CPU
        ProductAttribute::create(['product_id' => 62, 'attribute_id' => 35, 'value' => '6 nhân', 'short_value' => '6 cores']); // Số nhân
        ProductAttribute::create(['product_id' => 62, 'attribute_id' => 36, 'value' => '12 luồng', 'short_value' => '12 threads']); // Số luồng
        ProductAttribute::create(['product_id' => 62, 'attribute_id' => 37, 'value' => '2.5GHz - 4.4GHz', 'short_value' => '2.5-4.4GHz']); // Xung nhịp
        ProductAttribute::create(['product_id' => 62, 'attribute_id' => 38, 'value' => '18MB', 'short_value' => '18MB']); // Bộ nhớ đệm
        ProductAttribute::create(['product_id' => 62, 'attribute_id' => 89, 'value' => 'Alder Lake', 'short_value' => 'Alder Lake']); // Loại CPU
        ProductAttribute::create(['product_id' => 62, 'attribute_id' => 90, 'value' => '10nm', 'short_value' => '10nm']); // Tiến trình sản xuất
        ProductAttribute::create(['product_id' => 62, 'attribute_id' => 132, 'value' => 'Intel', 'short_value' => 'Intel']); // Hãng sản xuất

        // CPU Intel Core i3 11060F
        ProductAttribute::create(['product_id' => 63, 'attribute_id' => 1, 'value' => 'Core i3 11060F', 'short_value' => 'i3 11060F']); // CPU
        ProductAttribute::create(['product_id' => 63, 'attribute_id' => 35, 'value' => '4 nhân', 'short_value' => '4 cores']); // Số nhân
        ProductAttribute::create(['product_id' => 63, 'attribute_id' => 36, 'value' => '8 luồng', 'short_value' => '8 threads']); // Số luồng
        ProductAttribute::create(['product_id' => 63, 'attribute_id' => 37, 'value' => '3.3GHz - 4.3GHz', 'short_value' => '3.3-4.3GHz']); // Xung nhịp
        ProductAttribute::create(['product_id' => 63, 'attribute_id' => 38, 'value' => '12MB', 'short_value' => '12MB']); // Bộ nhớ đệm
        ProductAttribute::create(['product_id' => 63, 'attribute_id' => 89, 'value' => 'Alder Lake', 'short_value' => 'Alder Lake']); // Loại CPU
        ProductAttribute::create(['product_id' => 63, 'attribute_id' => 90, 'value' => '10nm', 'short_value' => '10nm']); // Tiến trình sản xuất
        ProductAttribute::create(['product_id' => 63, 'attribute_id' => 132, 'value' => 'Intel', 'short_value' => 'Intel']); // Hãng sản xuất

        // CPU AMD Ryzen 5 5500
        ProductAttribute::create(['product_id' => 64, 'attribute_id' => 1, 'value' => 'Ryzen 5 5500', 'short_value' => 'Ryzen 5 5500']); // CPU
        ProductAttribute::create(['product_id' => 64, 'attribute_id' => 35, 'value' => '6 nhân', 'short_value' => '6 cores']); // Số nhân
        ProductAttribute::create(['product_id' => 64, 'attribute_id' => 36, 'value' => '12 luồng', 'short_value' => '12 threads']); // Số luồng
        ProductAttribute::create(['product_id' => 64, 'attribute_id' => 37, 'value' => '3.6GHz - 4.2GHz', 'short_value' => '3.6-4.2GHz']); // Xung nhịp
        ProductAttribute::create(['product_id' => 64, 'attribute_id' => 38, 'value' => '16MB', 'short_value' => '16MB']); // Bộ nhớ đệm
        ProductAttribute::create(['product_id' => 64, 'attribute_id' => 89, 'value' => 'Zen 3', 'short_value' => 'Zen 3']); // Loại CPU
        ProductAttribute::create(['product_id' => 64, 'attribute_id' => 90, 'value' => '7nm', 'short_value' => '7nm']); // Tiến trình sản xuất
        ProductAttribute::create(['product_id' => 64, 'attribute_id' => 132, 'value' => 'AMD', 'short_value' => 'AMD']); // Hãng sản xuất

        // Bàn phím cơ E DRA không dây EK368L Alpha
        ProductAttribute::create(['product_id' => 65, 'attribute_id' => 16, 'value' => 'Cơ', 'short_value' => 'Mechanical']); // Loại bàn phím
        ProductAttribute::create(['product_id' => 65, 'attribute_id' => 17, 'value' => 'RGB', 'short_value' => 'RGB']); // Đèn nền
        ProductAttribute::create(['product_id' => 65, 'attribute_id' => 46, 'value' => 'Blue Switch', 'short_value' => 'Blue Switch']); // Loại switch
        ProductAttribute::create(['product_id' => 65, 'attribute_id' => 98, 'value' => 'Có', 'short_value' => 'Yes']); // Anti-ghosting
        ProductAttribute::create(['product_id' => 65, 'attribute_id' => 99, 'value' => 'Có', 'short_value' => 'Yes']); // Macro hỗ trợ
        ProductAttribute::create(['product_id' => 65, 'attribute_id' => 132, 'value' => 'E-DRA', 'short_value' => 'E_DRA']); // Hãng sản xuất

        // Bàn phím Gaming MSI Force GK100 RGB Led
        ProductAttribute::create(['product_id' => 66, 'attribute_id' => 16, 'value' => 'Cơ', 'short_value' => 'Mechanical']); // Loại bàn phím
        ProductAttribute::create(['product_id' => 66, 'attribute_id' => 17, 'value' => 'RGB', 'short_value' => 'RGB']); // Đèn nền
        ProductAttribute::create(['product_id' => 66, 'attribute_id' => 46, 'value' => 'Red Switch', 'short_value' => 'Red Switch']); // Loại switch
        ProductAttribute::create(['product_id' => 66, 'attribute_id' => 98, 'value' => 'Có', 'short_value' => 'Yes']); // Anti-ghosting
        ProductAttribute::create(['product_id' => 66, 'attribute_id' => 99, 'value' => 'Có', 'short_value' => 'Yes']); // Macro hỗ trợ
        ProductAttribute::create(['product_id' => 66, 'attribute_id' => 132, 'value' => 'MSI', 'short_value' => 'MSI']); // Hãng sản xuất

        // Bàn phím có dây Logitech K120
        ProductAttribute::create(['product_id' => 67, 'attribute_id' => 16, 'value' => 'Màng', 'short_value' => 'Membrane']); // Loại bàn phím
        ProductAttribute::create(['product_id' => 67, 'attribute_id' => 17, 'value' => 'Không', 'short_value' => 'No']); // Đèn nền
        ProductAttribute::create(['product_id' => 67, 'attribute_id' => 46, 'value' => 'Không', 'short_value' => 'None']); // Loại switch
        ProductAttribute::create(['product_id' => 67, 'attribute_id' => 98, 'value' => 'Không', 'short_value' => 'No']); // Anti-ghosting
        ProductAttribute::create(['product_id' => 67, 'attribute_id' => 99, 'value' => 'Không', 'short_value' => 'No']); // Macro hỗ trợ
        ProductAttribute::create(['product_id' => 67, 'attribute_id' => 132, 'value' => 'Logitech', 'short_value' => 'Logitech']); // Hãng sản xuất

        // Chuột không dây Logitech MX Anywhere 3S
        ProductAttribute::create(['product_id' => 68, 'attribute_id' => 45, 'value' => 'Wireless 2.4GHz, Bluetooth', 'short_value' => 'Wireless, Bluetooth']); // Kiểu kết nối
        ProductAttribute::create(['product_id' => 68, 'attribute_id' => 47, 'value' => '8000 DPI', 'short_value' => '8000 DPI']); // Độ phân giải DPI
        ProductAttribute::create(['product_id' => 68, 'attribute_id' => 48, 'value' => '6 nút', 'short_value' => '6 buttons']); // Số nút bấm
        ProductAttribute::create(['product_id' => 68, 'attribute_id' => 100, 'value' => 'Không', 'short_value' => 'No']); // LED RGB chuột
        ProductAttribute::create(['product_id' => 68, 'attribute_id' => 132, 'value' => 'Logitech', 'short_value' => 'Logitech']); // Hãng sản xuất

        // Chuột có dây Gaming Logitech G102 LightSync Gen 2
        ProductAttribute::create(['product_id' => 69, 'attribute_id' => 45, 'value' => 'USB', 'short_value' => 'USB']); // Kiểu kết nối
        ProductAttribute::create(['product_id' => 69, 'attribute_id' => 47, 'value' => '8000 DPI', 'short_value' => '8000 DPI']); // Độ phân giải DPI
        ProductAttribute::create(['product_id' => 69, 'attribute_id' => 48, 'value' => '6 nút', 'short_value' => '6 buttons']); // Số nút bấm
        ProductAttribute::create(['product_id' => 69, 'attribute_id' => 100, 'value' => 'Có', 'short_value' => 'Yes']); // LED RGB chuột
        ProductAttribute::create(['product_id' => 69, 'attribute_id' => 132, 'value' => 'Logitech', 'short_value' => 'Logitech']); // Hãng sản xuất

        // Chuột có dây Logitech B100
        ProductAttribute::create(['product_id' => 70, 'attribute_id' => 45, 'value' => 'USB', 'short_value' => 'USB']); // Kiểu kết nối
        ProductAttribute::create(['product_id' => 70, 'attribute_id' => 47, 'value' => '1000 DPI', 'short_value' => '1000 DPI']); // Độ phân giải DPI
        ProductAttribute::create(['product_id' => 70, 'attribute_id' => 48, 'value' => '3 nút', 'short_value' => '3 buttons']); // Số nút bấm
        ProductAttribute::create(['product_id' => 70, 'attribute_id' => 100, 'value' => 'Không', 'short_value' => 'No']); // LED RGB chuột
        ProductAttribute::create(['product_id' => 70, 'attribute_id' => 132, 'value' => 'Logitech', 'short_value' => 'Logitech']); // Hãng sản xuất

        // Webcam Logitech Brio 100 Graphite
        ProductAttribute::create(['product_id' => 71, 'attribute_id' => 24, 'value' => '1920x1080', 'short_value' => 'FHD']); // Độ phân giải
        ProductAttribute::create(['product_id' => 71, 'attribute_id' => 50, 'value' => 'Có', 'short_value' => 'Yes']); // Mic tích hợp
        ProductAttribute::create(['product_id' => 71, 'attribute_id' => 101, 'value' => '30fps', 'short_value' => '30fps']); // Tốc độ khung hình
        ProductAttribute::create(['product_id' => 71, 'attribute_id' => 102, 'value' => 'Không', 'short_value' => 'No']); // Khả năng xoay
        ProductAttribute::create(['product_id' => 71, 'attribute_id' => 132, 'value' => 'Logitech', 'short_value' => 'Logitech']); // Hãng sản xuất

        // Webcam Rapoo C270L 1080p
        ProductAttribute::create(['product_id' => 72, 'attribute_id' => 24, 'value' => '1920x1080', 'short_value' => 'FHD']); // Độ phân giải
        ProductAttribute::create(['product_id' => 72, 'attribute_id' => 50, 'value' => 'Có', 'short_value' => 'Yes']); // Mic tích hợp
        ProductAttribute::create(['product_id' => 72, 'attribute_id' => 101, 'value' => '30fps', 'short_value' => '30fps']); // Tốc độ khung hình
        ProductAttribute::create(['product_id' => 72, 'attribute_id' => 102, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng xoay
        ProductAttribute::create(['product_id' => 72, 'attribute_id' => 132, 'value' => 'Rapoo', 'short_value' => 'Rapoo']); // Hãng sản xuất

        // Webcam Rapoo C280 2K 1440p
        ProductAttribute::create(['product_id' => 73, 'attribute_id' => 24, 'value' => '2560x1440', 'short_value' => '2K']); // Độ phân giải
        ProductAttribute::create(['product_id' => 73, 'attribute_id' => 50, 'value' => 'Có', 'short_value' => 'Yes']); // Mic tích hợp
        ProductAttribute::create(['product_id' => 73, 'attribute_id' => 101, 'value' => '30fps', 'short_value' => '30fps']); // Tốc độ khung hình
        ProductAttribute::create(['product_id' => 73, 'attribute_id' => 102, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng xoay
        ProductAttribute::create(['product_id' => 73, 'attribute_id' => 132, 'value' => 'Rapoo', 'short_value' => 'Rapoo']); // Hãng sản xuất

        // Camera IP 360 độ 8MP EZVIZ H6C G1
        ProductAttribute::create(['product_id' => 74, 'attribute_id' => 24, 'value' => '8MP (3840x2160)', 'short_value' => '8MP']); // Độ phân giải
        ProductAttribute::create(['product_id' => 74, 'attribute_id' => 51, 'value' => 'H.265/H.264', 'short_value' => 'H.265/H.264']); // Chuẩn nén
        ProductAttribute::create(['product_id' => 74, 'attribute_id' => 52, 'value' => '10m', 'short_value' => '10m']); // Tầm nhìn ban đêm
        ProductAttribute::create(['product_id' => 74, 'attribute_id' => 61, 'value' => 'IEEE 802.11b/g/n', 'short_value' => 'WiFi 2.4GHz']); // Chuẩn WiFi
        ProductAttribute::create(['product_id' => 74, 'attribute_id' => 68, 'value' => 'Không', 'short_value' => 'No']); // Khả năng chống nước
        ProductAttribute::create(['product_id' => 74, 'attribute_id' => 103, 'value' => 'Không', 'short_value' => 'No']); // Chuẩn IP
        ProductAttribute::create(['product_id' => 74, 'attribute_id' => 104, 'value' => 'Không', 'short_value' => 'No']); // Hỗ trợ POE
        ProductAttribute::create(['product_id' => 74, 'attribute_id' => 132, 'value' => 'EZVIZ', 'short_value' => 'EZVIZ']); // Hãng sản xuất

        // Camera IP ngoài trời 360 độ 3MP 365 Selection OC1
        ProductAttribute::create(['product_id' => 75, 'attribute_id' => 24, 'value' => '3MP (2304x1296)', 'short_value' => '3MP']); // Độ phân giải
        ProductAttribute::create(['product_id' => 75, 'attribute_id' => 51, 'value' => 'H.265/H.264', 'short_value' => 'H.265/H.264']); // Chuẩn nén
        ProductAttribute::create(['product_id' => 75, 'attribute_id' => 52, 'value' => '10m', 'short_value' => '10m']); // Tầm nhìn ban đêm
        ProductAttribute::create(['product_id' => 75, 'attribute_id' => 61, 'value' => 'IEEE 802.11b/g/n', 'short_value' => 'WiFi 2.4GHz']); // Chuẩn WiFi
        ProductAttribute::create(['product_id' => 75, 'attribute_id' => 68, 'value' => 'IP67', 'short_value' => 'IP67']); // Khả năng chống nước
        ProductAttribute::create(['product_id' => 75, 'attribute_id' => 103, 'value' => 'IP67', 'short_value' => 'IP67']); // Chuẩn IP
        ProductAttribute::create(['product_id' => 75, 'attribute_id' => 104, 'value' => 'Không', 'short_value' => 'No']); // Hỗ trợ POE
        ProductAttribute::create(['product_id' => 75, 'attribute_id' => 132, 'value' => '365 Selection', 'short_value' => '365 Selection']); // Hãng sản xuất

        // Camera IP EZVIZ H6C Pro 3K 5MP trong nhà 360 độ
        ProductAttribute::create(['product_id' => 76, 'attribute_id' => 24, 'value' => '5MP (2880x1620)', 'short_value' => '3K']); // Độ phân giải
        ProductAttribute::create(['product_id' => 76, 'attribute_id' => 51, 'value' => 'H.265/H.264', 'short_value' => 'H.265/H.264']); // Chuẩn nén
        ProductAttribute::create(['product_id' => 76, 'attribute_id' => 52, 'value' => '10m', 'short_value' => '10m']); // Tầm nhìn ban đêm
        ProductAttribute::create(['product_id' => 76, 'attribute_id' => 61, 'value' => 'IEEE 802.11b/g/n', 'short_value' => 'WiFi 2.4GHz']); // Chuẩn WiFi
        ProductAttribute::create(['product_id' => 76, 'attribute_id' => 68, 'value' => 'Không', 'short_value' => 'No']); // Khả năng chống nước
        ProductAttribute::create(['product_id' => 76, 'attribute_id' => 103, 'value' => 'Không', 'short_value' => 'No']); // Chuẩn IP
        ProductAttribute::create(['product_id' => 76, 'attribute_id' => 104, 'value' => 'Không', 'short_value' => 'No']); // Hỗ trợ POE
        ProductAttribute::create(['product_id' => 76, 'attribute_id' => 132, 'value' => 'EZVIZ', 'short_value' => 'EZVIZ']); // Hãng sản xuất

        // Đầu ghi Acusense 16 kênh Hikvision DS 7616NXI K1
        ProductAttribute::create(['product_id' => 77, 'attribute_id' => 53, 'value' => '16 kênh', 'short_value' => '16 channels']); // Số kênh
        ProductAttribute::create(['product_id' => 77, 'attribute_id' => 54, 'value' => '10TB', 'short_value' => '10TB']); // Dung lượng hỗ trợ tối đa
        ProductAttribute::create(['product_id' => 77, 'attribute_id' => 51, 'value' => 'H.265+/H.265/H.264+/H.264', 'short_value' => 'H.265+/H.264+']); // Chuẩn nén
        ProductAttribute::create(['product_id' => 77, 'attribute_id' => 105, 'value' => 'NVR', 'short_value' => 'NVR']); // Loại đầu ghi
        ProductAttribute::create(['product_id' => 77, 'attribute_id' => 62, 'value' => '1 cổng 10/100/1000Mbps', 'short_value' => '1x Gigabit LAN']); // Số cổng LAN
        ProductAttribute::create(['product_id' => 77, 'attribute_id' => 132, 'value' => 'Hikvision', 'short_value' => 'Hikvision']); // Hãng sản xuất

        // Đầu ghi 8 kênh EZVIZ CS X5S R100 8W
        ProductAttribute::create(['product_id' => 78, 'attribute_id' => 53, 'value' => '8 kênh', 'short_value' => '8 channels']); // Số kênh
        ProductAttribute::create(['product_id' => 78, 'attribute_id' => 54, 'value' => '8TB', 'short_value' => '8TB']); // Dung lượng hỗ trợ tối đa
        ProductAttribute::create(['product_id' => 78, 'attribute_id' => 51, 'value' => 'H.265/H.264', 'short_value' => 'H.265/H.264']); // Chuẩn nén
        ProductAttribute::create(['product_id' => 78, 'attribute_id' => 105, 'value' => 'NVR', 'short_value' => 'NVR']); // Loại đầu ghi
        ProductAttribute::create(['product_id' => 78, 'attribute_id' => 62, 'value' => '1 cổng 10/100Mbps', 'short_value' => '1x LAN']); // Số cổng LAN
        ProductAttribute::create(['product_id' => 78, 'attribute_id' => 132, 'value' => 'EZVIZ', 'short_value' => 'EZVIZ']); // Hãng sản xuất

        // Đầu ghi 4 kênh EZVIZ CS X5S R100 4W
        ProductAttribute::create(['product_id' => 79, 'attribute_id' => 53, 'value' => '4 kênh', 'short_value' => '4 channels']); // Số kênh
        ProductAttribute::create(['product_id' => 79, 'attribute_id' => 54, 'value' => '8TB', 'short_value' => '8TB']); // Dung lượng hỗ trợ tối đa
        ProductAttribute::create(['product_id' => 79, 'attribute_id' => 51, 'value' => 'H.265/H.264', 'short_value' => 'H.265/H.264']); // Chuẩn nén
        ProductAttribute::create(['product_id' => 79, 'attribute_id' => 105, 'value' => 'NVR', 'short_value' => 'NVR']); // Loại đầu ghi
        ProductAttribute::create(['product_id' => 79, 'attribute_id' => 62, 'value' => '1 cổng 10/100Mbps', 'short_value' => '1x LAN']); // Số cổng LAN
        ProductAttribute::create(['product_id' => 79, 'attribute_id' => 132, 'value' => 'EZVIZ', 'short_value' => 'EZVIZ']); // Hãng sản xuất

        // Ổ Cứng Western Digital Purple 6TB 256MB Cache WD64PURZ
        ProductAttribute::create(['product_id' => 80, 'attribute_id' => 3, 'value' => '6TB', 'short_value' => '6TB']); // Ổ cứng
        ProductAttribute::create(['product_id' => 80, 'attribute_id' => 20, 'value' => '180MB/s đọc/ghi', 'short_value' => '180MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 80, 'attribute_id' => 40, 'value' => '5400RPM', 'short_value' => '5400RPM']); // Tốc độ quay
        ProductAttribute::create(['product_id' => 80, 'attribute_id' => 106, 'value' => 'Có', 'short_value' => 'Yes']); // Chuẩn chịu tải 24/7
        ProductAttribute::create(['product_id' => 80, 'attribute_id' => 132, 'value' => 'Western Digital', 'short_value' => 'Western Digital']); // Hãng sản xuất

        // Ổ cứng Seagate Skyhawk 3TB 3.5 ST3000VX009 Chuyên dụng cho Camera
        ProductAttribute::create(['product_id' => 81, 'attribute_id' => 3, 'value' => '3TB', 'short_value' => '3TB']); // Ổ cứng
        ProductAttribute::create(['product_id' => 81, 'attribute_id' => 20, 'value' => '180MB/s đọc/ghi', 'short_value' => '180MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 81, 'attribute_id' => 40, 'value' => '5900RPM', 'short_value' => '5900RPM']); // Tốc độ quay
        ProductAttribute::create(['product_id' => 81, 'attribute_id' => 106, 'value' => 'Có', 'short_value' => 'Yes']); // Chuẩn chịu tải 24/7
        ProductAttribute::create(['product_id' => 81, 'attribute_id' => 132, 'value' => 'Seagate', 'short_value' => 'Seagate']); // Hãng sản xuất

        // Thẻ nhớ MicroSD Kingston 64GB Canvas Select Plus 100R A1 C10 SDCS2 64GBSP
        ProductAttribute::create(['product_id' => 82, 'attribute_id' => 54, 'value' => '64GB', 'short_value' => '64GB']); // Dung lượng hỗ trợ tối đa
        ProductAttribute::create(['product_id' => 82, 'attribute_id' => 64, 'value' => 'MicroSDXC', 'short_value' => 'MicroSDXC']); // Chuẩn thẻ
        ProductAttribute::create(['product_id' => 82, 'attribute_id' => 115, 'value' => 'Class 10', 'short_value' => 'C10']); // Class tốc độ
        ProductAttribute::create(['product_id' => 82, 'attribute_id' => 116, 'value' => 'UHS-I', 'short_value' => 'UHS-I']); // UHS hỗ trợ
        ProductAttribute::create(['product_id' => 82, 'attribute_id' => 20, 'value' => '100MB/s đọc', 'short_value' => '100MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 82, 'attribute_id' => 132, 'value' => 'Kingston', 'short_value' => 'Kingston']); // Hãng sản xuất

        // Máy in Laser đen trắng Canon LBP 6030w In A4 USB Wifi
        ProductAttribute::create(['product_id' => 83, 'attribute_id' => 55, 'value' => 'Laser', 'short_value' => 'Laser']); // Công nghệ in
        ProductAttribute::create(['product_id' => 83, 'attribute_id' => 56, 'value' => '19 trang/phút', 'short_value' => '19 ppm']); // Tốc độ in
        ProductAttribute::create(['product_id' => 83, 'attribute_id' => 57, 'value' => '600x600 DPI', 'short_value' => '600x600 DPI']); // Độ phân giải in
        ProductAttribute::create(['product_id' => 83, 'attribute_id' => 107, 'value' => 'Đen trắng', 'short_value' => 'Monochrome']); // Loại in
        ProductAttribute::create(['product_id' => 83, 'attribute_id' => 108, 'value' => '150 tờ', 'short_value' => '150 sheets']); // Khay giấy
        ProductAttribute::create(['product_id' => 83, 'attribute_id' => 132, 'value' => 'Canon', 'short_value' => 'Canon']); // Hãng sản xuất

        // Máy in laser đen trắng HP 108W 4ZB80A In A4 A5 USB WIFI
        ProductAttribute::create(['product_id' => 84, 'attribute_id' => 55, 'value' => 'Laser', 'short_value' => 'Laser']); // Công nghệ in
        ProductAttribute::create(['product_id' => 84, 'attribute_id' => 56, 'value' => '20 trang/phút', 'short_value' => '20 ppm']); // Tốc độ in
        ProductAttribute::create(['product_id' => 84, 'attribute_id' => 57, 'value' => '600x600 DPI', 'short_value' => '600x600 DPI']); // Độ phân giải in
        ProductAttribute::create(['product_id' => 84, 'attribute_id' => 107, 'value' => 'Đen trắng', 'short_value' => 'Monochrome']); // Loại in
        ProductAttribute::create(['product_id' => 84, 'attribute_id' => 108, 'value' => '150 tờ', 'short_value' => '150 sheets']); // Khay giấy
        ProductAttribute::create(['product_id' => 84, 'attribute_id' => 132, 'value' => 'HP', 'short_value' => 'HP']); // Hãng sản xuất

        // Máy in laser đen trắng Canon LBP 243DW In đảo mặt A4 A5 USB LAN WIFI Chính hãng
        ProductAttribute::create(['product_id' => 85, 'attribute_id' => 55, 'value' => 'Laser', 'short_value' => 'Laser']); // Công nghệ in
        ProductAttribute::create(['product_id' => 85, 'attribute_id' => 56, 'value' => '36 trang/phút', 'short_value' => '36 ppm']); // Tốc độ in
        ProductAttribute::create(['product_id' => 85, 'attribute_id' => 57, 'value' => '1200x1200 DPI', 'short_value' => '1200x1200 DPI']); // Độ phân giải in
        ProductAttribute::create(['product_id' => 85, 'attribute_id' => 107, 'value' => 'Đen trắng', 'short_value' => 'Monochrome']); // Loại in
        ProductAttribute::create(['product_id' => 85, 'attribute_id' => 108, 'value' => '250 tờ', 'short_value' => '250 sheets']); // Khay giấy
        ProductAttribute::create(['product_id' => 85, 'attribute_id' => 132, 'value' => 'Canon', 'short_value' => 'Canon']); // Hãng sản xuất

        // Máy in hóa đơn di động APOS P103
        ProductAttribute::create(['product_id' => 86, 'attribute_id' => 55, 'value' => 'Nhiệt', 'short_value' => 'Thermal']); // Công nghệ in
        ProductAttribute::create(['product_id' => 86, 'attribute_id' => 56, 'value' => '90mm/s', 'short_value' => '90mm/s']); // Tốc độ in
        ProductAttribute::create(['product_id' => 86, 'attribute_id' => 57, 'value' => '203 DPI', 'short_value' => '203 DPI']); // Độ phân giải in
        ProductAttribute::create(['product_id' => 86, 'attribute_id' => 107, 'value' => 'Đen trắng', 'short_value' => 'Monochrome']); // Loại in
        ProductAttribute::create(['product_id' => 86, 'attribute_id' => 108, 'value' => '50 tờ', 'short_value' => '50 sheets']); // Khay giấy
        ProductAttribute::create(['product_id' => 86, 'attribute_id' => 132, 'value' => 'APOS', 'short_value' => 'APOS']); // Hãng sản xuất

        // Màn hình hiển thị QR động thanh toán thông minh TingBox
        ProductAttribute::create(['product_id' => 87, 'attribute_id' => 24, 'value' => '1920x1080', 'short_value' => 'FHD']); // Độ phân giải
        ProductAttribute::create(['product_id' => 87, 'attribute_id' => 23, 'value' => '10 inch', 'short_value' => '10"']); // Kích thước
        ProductAttribute::create(['product_id' => 87, 'attribute_id' => 61, 'value' => 'IEEE 802.11b/g/n', 'short_value' => 'WiFi 2.4GHz']); // Chuẩn WiFi
        ProductAttribute::create(['product_id' => 87, 'attribute_id' => 109, 'value' => 'Không', 'short_value' => 'No']); // Máy in hóa đơn tích hợp
        ProductAttribute::create(['product_id' => 87, 'attribute_id' => 110, 'value' => 'Có', 'short_value' => 'Yes']); // Hỗ trợ quét mã vạch
        ProductAttribute::create(['product_id' => 87, 'attribute_id' => 132, 'value' => 'TingBox', 'short_value' => 'TingBox']); // Hãng sản xuất

        // Máy quẹt thẻ ngân hàng Mpos nhỏ gọn tiện lợi
        ProductAttribute::create(['product_id' => 88, 'attribute_id' => 24, 'value' => 'Không áp dụng', 'short_value' => 'N/A']); // Độ phân giải
        ProductAttribute::create(['product_id' => 88, 'attribute_id' => 23, 'value' => '120x70x20mm', 'short_value' => '120x70x20mm']); // Kích thước
        ProductAttribute::create(['product_id' => 88, 'attribute_id' => 61, 'value' => 'IEEE 802.11b/g/n', 'short_value' => 'WiFi 2.4GHz']); // Chuẩn WiFi
        ProductAttribute::create(['product_id' => 88, 'attribute_id' => 109, 'value' => 'Có', 'short_value' => 'Yes']); // Máy in hóa đơn tích hợp
        ProductAttribute::create(['product_id' => 88, 'attribute_id' => 110, 'value' => 'Có', 'short_value' => 'Yes']); // Hỗ trợ quét mã vạch
        ProductAttribute::create(['product_id' => 88, 'attribute_id' => 132, 'value' => 'Không', 'short_value' => 'No']); // Hãng sản xuất

        // Phần mềm M365 Family English APAC Subscr 1YR Medialess EP2 36878
        ProductAttribute::create(['product_id' => 89, 'attribute_id' => 58, 'value' => 'Microsoft 365 Family', 'short_value' => 'M365 Family']); // Phiên bản
        ProductAttribute::create(['product_id' => 89, 'attribute_id' => 59, 'value' => '1 năm', 'short_value' => '1 year']); // Thời hạn bản quyền
        ProductAttribute::create(['product_id' => 89, 'attribute_id' => 111, 'value' => 'Subscription', 'short_value' => 'Subscription']); // Loại giấy phép
        ProductAttribute::create(['product_id' => 89, 'attribute_id' => 132, 'value' => 'Microsoft', 'short_value' => 'Microsoft']); // Hãng sản xuất

        // Bkav Pro Internet Security
        ProductAttribute::create(['product_id' => 90, 'attribute_id' => 58, 'value' => 'Bkav Pro', 'short_value' => 'Bkav Pro']); // Phiên bản
        ProductAttribute::create(['product_id' => 90, 'attribute_id' => 59, 'value' => '1 năm', 'short_value' => '1 year']); // Thời hạn bản quyền
        ProductAttribute::create(['product_id' => 90, 'attribute_id' => 111, 'value' => 'Subscription', 'short_value' => 'Subscription']); // Loại giấy phép
        ProductAttribute::create(['product_id' => 90, 'attribute_id' => 132, 'value' => 'Bkav', 'short_value' => 'Bkav']); // Hãng sản xuất

        // Phần mềm Microsoft Windows GGWA Windows 11 Pro Legalization Get Genuine
        ProductAttribute::create(['product_id' => 91, 'attribute_id' => 58, 'value' => 'Windows 11 Pro', 'short_value' => 'Win 11 Pro']); // Phiên bản
        ProductAttribute::create(['product_id' => 91, 'attribute_id' => 59, 'value' => 'Vĩnh viễn', 'short_value' => 'Lifetime']); // Thời hạn bản quyền
        ProductAttribute::create(['product_id' => 91, 'attribute_id' => 111, 'value' => 'OEM', 'short_value' => 'OEM']); // Loại giấy phép
        ProductAttribute::create(['product_id' => 91, 'attribute_id' => 132, 'value' => 'Microsoft', 'short_value' => 'Microsoft']); // Hãng sản xuất

        // Bộ phát wifi 6 Asus RT AX1800HP v2 MU MIMO AX1800Mbps
        ProductAttribute::create(['product_id' => 92, 'attribute_id' => 60, 'value' => '1800Mbps', 'short_value' => '1800Mbps']); // Tốc độ
        ProductAttribute::create(['product_id' => 92, 'attribute_id' => 61, 'value' => 'WiFi 6 (802.11ax)', 'short_value' => 'WiFi 6']); // Chuẩn WiFi
        ProductAttribute::create(['product_id' => 92, 'attribute_id' => 62, 'value' => '4 cổng 10/100/1000Mbps', 'short_value' => '4x Gigabit LAN']); // Số cổng LAN
        ProductAttribute::create(['product_id' => 92, 'attribute_id' => 112, 'value' => '4 ăng-ten', 'short_value' => '4 antennas']); // Số ăng-ten
        ProductAttribute::create(['product_id' => 92, 'attribute_id' => 113, 'value' => 'WPA3, WPA2', 'short_value' => 'WPA3, WPA2']); // Bảo mật hỗ trợ
        ProductAttribute::create(['product_id' => 92, 'attribute_id' => 104, 'value' => 'Không', 'short_value' => 'No']); // Hỗ trợ POE
        ProductAttribute::create(['product_id' => 92, 'attribute_id' => 132, 'value' => 'Asus', 'short_value' => 'Asus']); // Hãng sản xuất

        // Switch 8port TP Link TL SG108E
        ProductAttribute::create(['product_id' => 93, 'attribute_id' => 60, 'value' => '1000Mbps', 'short_value' => '1000Mbps']); // Tốc độ
        ProductAttribute::create(['product_id' => 93, 'attribute_id' => 62, 'value' => '8 cổng 10/100/1000Mbps', 'short_value' => '8x Gigabit LAN']); // Số cổng LAN
        ProductAttribute::create(['product_id' => 93, 'attribute_id' => 113, 'value' => 'VLAN, QoS', 'short_value' => 'VLAN, QoS']); // Bảo mật hỗ trợ
        ProductAttribute::create(['product_id' => 93, 'attribute_id' => 104, 'value' => 'Không', 'short_value' => 'No']); // Hỗ trợ POE
        ProductAttribute::create(['product_id' => 93, 'attribute_id' => 132, 'value' => 'TP Link', 'short_value' => 'TP Link']); // Hãng sản xuất

        // Bộ Test Cáp Mạng Test POE Dò Dây Line Ugreen 10950 cao cấp
        ProductAttribute::create(['product_id' => 94, 'attribute_id' => 60, 'value' => 'Không áp dụng', 'short_value' => 'N/A']); // Tốc độ
        ProductAttribute::create(['product_id' => 94, 'attribute_id' => 62, 'value' => '1 cổng RJ45', 'short_value' => '1x RJ45']); // Số cổng LAN
        ProductAttribute::create(['product_id' => 94, 'attribute_id' => 104, 'value' => 'Có', 'short_value' => 'Yes']); // Hỗ trợ POE
        ProductAttribute::create(['product_id' => 94, 'attribute_id' => 132, 'value' => 'Ugreen', 'short_value' => 'Ugreen']); // Hãng sản xuất

        // Tai nghe Razer BlackShark V2 X USB
        ProductAttribute::create(['product_id' => 95, 'attribute_id' => 122, 'value' => 'USB', 'short_value' => 'USB']); // Loại kết nối Tai nghe
        ProductAttribute::create(['product_id' => 95, 'attribute_id' => 123, 'value' => 'Không', 'short_value' => 'N/A']); // Thời lượng pin Tai nghe
        ProductAttribute::create(['product_id' => 95, 'attribute_id' => 124, 'value' => '100 dB', 'short_value' => '100 dB']); // Độ nhạy Tai nghe
        ProductAttribute::create(['product_id' => 95, 'attribute_id' => 125, 'value' => 'Có', 'short_value' => 'Yes']); // Mic tích hợp Tai nghe
        ProductAttribute::create(['product_id' => 95, 'attribute_id' => 132, 'value' => 'Razer', 'short_value' => 'Razer']); // Hãng sản xuất

        // Tai nghe HyperX Cloud III Wireless Black Red
        ProductAttribute::create(['product_id' => 96, 'attribute_id' => 122, 'value' => 'Wireless 2.4GHz', 'short_value' => 'Wireless 2.4GHz']); // Loại kết nối Tai nghe
        ProductAttribute::create(['product_id' => 96, 'attribute_id' => 123, 'value' => '120 giờ', 'short_value' => '120 hours']); // Thời lượng pin Tai nghe
        ProductAttribute::create(['product_id' => 96, 'attribute_id' => 124, 'value' => '98 dB', 'short_value' => '98 dB']); // Độ nhạy Tai nghe
        ProductAttribute::create(['product_id' => 96, 'attribute_id' => 125, 'value' => 'Có', 'short_value' => 'Yes']); // Mic tích hợp Tai nghe
        ProductAttribute::create(['product_id' => 96, 'attribute_id' => 132, 'value' => 'HyperX', 'short_value' => 'HyperX']); // Hãng sản xuất

        // Tai nghe Razer BlackShark V3 Pro Black
        ProductAttribute::create(['product_id' => 97, 'attribute_id' => 122, 'value' => 'Wireless 2.4GHz, Bluetooth', 'short_value' => 'Wireless, Bluetooth']); // Loại kết nối Tai nghe
        ProductAttribute::create(['product_id' => 97, 'attribute_id' => 123, 'value' => '24 giờ', 'short_value' => '24 hours']); // Thời lượng pin Tai nghe
        ProductAttribute::create(['product_id' => 97, 'attribute_id' => 124, 'value' => '102 dB', 'short_value' => '102 dB']); // Độ nhạy Tai nghe
        ProductAttribute::create(['product_id' => 97, 'attribute_id' => 125, 'value' => 'Có', 'short_value' => 'Yes']); // Mic tích hợp Tai nghe
        ProductAttribute::create(['product_id' => 97, 'attribute_id' => 132, 'value' => 'Razer', 'short_value' => 'Razer']); // Hãng sản xuất

        // Loa Thonet & Vander Vertrag Bluetooth Woodskin
        ProductAttribute::create(['product_id' => 98, 'attribute_id' => 128, 'value' => '40W', 'short_value' => '40W']); // Công suất Loa
        ProductAttribute::create(['product_id' => 98, 'attribute_id' => 129, 'value' => '300x150x200mm', 'short_value' => '300x150x200mm']); // Kích thước Loa
        ProductAttribute::create(['product_id' => 98, 'attribute_id' => 130, 'value' => '2.0', 'short_value' => '2.0']); // Số kênh Loa
        ProductAttribute::create(['product_id' => 98, 'attribute_id' => 19, 'value' => 'Bluetooth, AUX', 'short_value' => 'Bluetooth, AUX']); // Loại kết nối
        ProductAttribute::create(['product_id' => 98, 'attribute_id' => 132, 'value' => 'Thonet & Vander', 'short_value' => 'Thonet & Vander']); // Hãng sản xuất

        // Loa Edifier MR3 2.0 Bluetooth Black
        ProductAttribute::create(['product_id' => 99, 'attribute_id' => 128, 'value' => '15W', 'short_value' => '15W']); // Công suất Loa
        ProductAttribute::create(['product_id' => 99, 'attribute_id' => 129, 'value' => '140x170x230mm', 'short_value' => '140x170x230mm']); // Kích thước Loa
        ProductAttribute::create(['product_id' => 99, 'attribute_id' => 130, 'value' => '2.0', 'short_value' => '2.0']); // Số kênh Loa
        ProductAttribute::create(['product_id' => 99, 'attribute_id' => 19, 'value' => 'Bluetooth, AUX', 'short_value' => 'Bluetooth, AUX']); // Loại kết nối
        ProductAttribute::create(['product_id' => 99, 'attribute_id' => 132, 'value' => 'Edifier', 'short_value' => 'Edifier']); // Hãng sản xuất

        // Loa Edifier G1500 MAX 2.1
        ProductAttribute::create(['product_id' => 100, 'attribute_id' => 128, 'value' => '20W', 'short_value' => '20W']); // Công suất Loa
        ProductAttribute::create(['product_id' => 100, 'attribute_id' => 129, 'value' => '150x200x250mm', 'short_value' => '150x200x250mm']); // Kích thước Loa
        ProductAttribute::create(['product_id' => 100, 'attribute_id' => 130, 'value' => '2.1', 'short_value' => '2.1']); // Số kênh Loa
        ProductAttribute::create(['product_id' => 100, 'attribute_id' => 19, 'value' => 'Bluetooth, AUX, USB', 'short_value' => 'Bluetooth, AUX, USB']); // Loại kết nối
        ProductAttribute::create(['product_id' => 100, 'attribute_id' => 132, 'value' => 'Edifier', 'short_value' => 'Edifier']); // Hãng sản xuất

        // USB Lexar JumpDrive D400 64GB USB C LJDD400064G BNQNG
        ProductAttribute::create(['product_id' => 101, 'attribute_id' => 20, 'value' => '100MB/s đọc, 30MB/s ghi', 'short_value' => '100/30MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 101, 'attribute_id' => 54, 'value' => '64GB', 'short_value' => '64GB']); // Dung lượng hỗ trợ tối đa
        ProductAttribute::create(['product_id' => 101, 'attribute_id' => 15, 'value' => 'USB-C, USB-A', 'short_value' => 'USB-C, USB-A']); // Chuẩn kết nối
        ProductAttribute::create(['product_id' => 101, 'attribute_id' => 114, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng chống sốc
        ProductAttribute::create(['product_id' => 101, 'attribute_id' => 132, 'value' => 'Lexar', 'short_value' => 'Lexar']); // Hãng sản xuất

        // Ổ cứng di động HDD WD Elements Portable 6TB 2.5 USB 3.0 WDBHJS0060BBK WESN Đen
        ProductAttribute::create(['product_id' => 102, 'attribute_id' => 54, 'value' => '6TB', 'short_value' => '6TB']); // Dung lượng hỗ trợ tối đa
        ProductAttribute::create(['product_id' => 102, 'attribute_id' => 15, 'value' => 'USB 3.0', 'short_value' => 'USB 3.0']); // Chuẩn kết nối
        ProductAttribute::create(['product_id' => 102, 'attribute_id' => 20, 'value' => '130MB/s đọc/ghi', 'short_value' => '130MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 102, 'attribute_id' => 114, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng chống sốc
        ProductAttribute::create(['product_id' => 102, 'attribute_id' => 132, 'value' => 'Western Digital', 'short_value' => 'Western Digital']); // Hãng sản xuất

        // Box ổ cứng SSD M2 hỗ trợ NVME SATA USB Type C 3.2 GEN2 tốc độ 10Gbps Ugreen 90264
        ProductAttribute::create(['product_id' => 103, 'attribute_id' => 54, 'value' => '2TB', 'short_value' => '2TB']); // Dung lượng hỗ trợ tối đa
        ProductAttribute::create(['product_id' => 103, 'attribute_id' => 15, 'value' => 'USB-C 3.2 Gen2', 'short_value' => 'USB-C 3.2 Gen2']); // Chuẩn kết nối
        ProductAttribute::create(['product_id' => 103, 'attribute_id' => 20, 'value' => '1000MB/s đọc/ghi', 'short_value' => '1000MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 103, 'attribute_id' => 114, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng chống sốc
        ProductAttribute::create(['product_id' => 103, 'attribute_id' => 132, 'value' => 'Ugreen', 'short_value' => 'Ugreen']); // Hãng sản xuất

        // Thẻ nhớ SanDisk Ultra 64GB MicroSDXC C10 UHS 1 100MB s SDSQUNR 064G GN3MN
        ProductAttribute::create(['product_id' => 104, 'attribute_id' => 54, 'value' => '64GB', 'short_value' => '64GB']); // Dung lượng hỗ trợ tối đa
        ProductAttribute::create(['product_id' => 104, 'attribute_id' => 64, 'value' => 'MicroSDXC', 'short_value' => 'MicroSDXC']); // Chuẩn thẻ
        ProductAttribute::create(['product_id' => 104, 'attribute_id' => 115, 'value' => 'Class 10', 'short_value' => 'C10']); // Class tốc độ
        ProductAttribute::create(['product_id' => 104, 'attribute_id' => 116, 'value' => 'UHS-I', 'short_value' => 'UHS-I']); // UHS hỗ trợ
        ProductAttribute::create(['product_id' => 104, 'attribute_id' => 20, 'value' => '100MB/s đọc', 'short_value' => '100MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 104, 'attribute_id' => 132, 'value' => 'SanDisk', 'short_value' => 'SanDisk']); // Hãng sản xuất

        // Thẻ nhớ Micro SD HIKSEMI NEO 64GB
        ProductAttribute::create(['product_id' => 105, 'attribute_id' => 54, 'value' => '64GB', 'short_value' => '64GB']); // Dung lượng hỗ trợ tối đa
        ProductAttribute::create(['product_id' => 105, 'attribute_id' => 64, 'value' => 'MicroSDXC', 'short_value' => 'MicroSDXC']); // Chuẩn thẻ
        ProductAttribute::create(['product_id' => 105, 'attribute_id' => 115, 'value' => 'Class 10', 'short_value' => 'C10']); // Class tốc độ
        ProductAttribute::create(['product_id' => 105, 'attribute_id' => 116, 'value' => 'UHS-I', 'short_value' => 'UHS-I']); // UHS hỗ trợ
        ProductAttribute::create(['product_id' => 105, 'attribute_id' => 20, 'value' => '92MB/s đọc, 30MB/s ghi', 'short_value' => '92/30MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 105, 'attribute_id' => 132, 'value' => 'HIKSEMI', 'short_value' => 'HIKSEMI']); // Hãng sản xuất

        // Thẻ nhớ Micro SD Samsung EVO Plus 64GB
        ProductAttribute::create(['product_id' => 106, 'attribute_id' => 54, 'value' => '64GB', 'short_value' => '64GB']); // Dung lượng hỗ trợ tối đa
        ProductAttribute::create(['product_id' => 106, 'attribute_id' => 64, 'value' => 'MicroSDXC', 'short_value' => 'MicroSDXC']); // Chuẩn thẻ
        ProductAttribute::create(['product_id' => 106, 'attribute_id' => 115, 'value' => 'Class 10', 'short_value' => 'C10']); // Class tốc độ
        ProductAttribute::create(['product_id' => 106, 'attribute_id' => 116, 'value' => 'UHS-I', 'short_value' => 'UHS-I']); // UHS hỗ trợ
        ProductAttribute::create(['product_id' => 106, 'attribute_id' => 20, 'value' => '130MB/s đọc', 'short_value' => '130MB/s']); // Tốc độ đọc/ghi
        ProductAttribute::create(['product_id' => 106, 'attribute_id' => 132, 'value' => 'Samsung', 'short_value' => 'Samsung']); // Hãng sản xuất

        // Cáp HDMI 1.4 dài 50m Ugreen
        ProductAttribute::create(['product_id' => 107, 'attribute_id' => 65, 'value' => 'HDMI', 'short_value' => 'HDMI']); // Loại cáp
        ProductAttribute::create(['product_id' => 107, 'attribute_id' => 78, 'value' => '50m', 'short_value' => '50m']); // Chiều dài
        ProductAttribute::create(['product_id' => 107, 'attribute_id' => 67, 'value' => 'HDMI 1.4', 'short_value' => 'HDMI 1.4']); // Đầu kết nối
        ProductAttribute::create(['product_id' => 107, 'attribute_id' => 117, 'value' => 'Có', 'short_value' => 'Yes']); // Bọc chống nhiễu
        ProductAttribute::create(['product_id' => 107, 'attribute_id' => 132, 'value' => 'Ugreen', 'short_value' => 'Ugreen']); // Hãng sản xuất

        // Cáp VGA tròn Vention VAG B04 B1000 10m
        ProductAttribute::create(['product_id' => 108, 'attribute_id' => 65, 'value' => 'VGA', 'short_value' => 'VGA']); // Loại cáp
        ProductAttribute::create(['product_id' => 108, 'attribute_id' => 78, 'value' => '10m', 'short_value' => '10m']); // Chiều dài
        ProductAttribute::create(['product_id' => 108, 'attribute_id' => 67, 'value' => 'VGA', 'short_value' => 'VGA']); // Đầu kết nối
        ProductAttribute::create(['product_id' => 108, 'attribute_id' => 117, 'value' => 'Có', 'short_value' => 'Yes']); // Bọc chống nhiễu
        ProductAttribute::create(['product_id' => 108, 'attribute_id' => 132, 'value' => 'Vention', 'short_value' => 'Vention']); // Hãng sản xuất

        // Cáp dữ liệu AV 3.5mm truyền âm thanh dài 5M Ugreen
        ProductAttribute::create(['product_id' => 109, 'attribute_id' => 65, 'value' => 'AV 3.5mm', 'short_value' => '3.5mm']); // Loại cáp
        ProductAttribute::create(['product_id' => 109, 'attribute_id' => 78, 'value' => '5m', 'short_value' => '5m']); // Chiều dài
        ProductAttribute::create(['product_id' => 109, 'attribute_id' => 67, 'value' => '3.5mm', 'short_value' => '3.5mm']); // Đầu kết nối
        ProductAttribute::create(['product_id' => 109, 'attribute_id' => 117, 'value' => 'Có', 'short_value' => 'Yes']); // Bọc chống nhiễu
        ProductAttribute::create(['product_id' => 109, 'attribute_id' => 132, 'value' => 'Ugreen', 'short_value' => 'Ugreen']); // Hãng sản xuất

        // Balo Laptop Acer Gaming Suv
        ProductAttribute::create(['product_id' => 110, 'attribute_id' => 29, 'value' => 'Vải polyester', 'short_value' => 'Polyester']); // Chất liệu
        ProductAttribute::create(['product_id' => 110, 'attribute_id' => 68, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng chống nước
        ProductAttribute::create(['product_id' => 110, 'attribute_id' => 118, 'value' => '3 ngăn', 'short_value' => '3 compartments']); // Số ngăn
        ProductAttribute::create(['product_id' => 110, 'attribute_id' => 119, 'value' => 'Có', 'short_value' => 'Yes']); // Đệm chống sốc
        ProductAttribute::create(['product_id' => 110, 'attribute_id' => 132, 'value' => 'Acer', 'short_value' => 'Acer']); // Hãng sản xuất

        // Balo laptop Kmore Micah Backpack
        ProductAttribute::create(['product_id' => 111, 'attribute_id' => 29, 'value' => 'Vải polyester', 'short_value' => 'Polyester']); // Chất liệu
        ProductAttribute::create(['product_id' => 111, 'attribute_id' => 68, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng chống nước
        ProductAttribute::create(['product_id' => 111, 'attribute_id' => 118, 'value' => '4 ngăn', 'short_value' => '4 compartments']); // Số ngăn
        ProductAttribute::create(['product_id' => 111, 'attribute_id' => 119, 'value' => 'Có', 'short_value' => 'Yes']); // Đệm chống sốc
        ProductAttribute::create(['product_id' => 111, 'attribute_id' => 132, 'value' => 'Kmore', 'short_value' => 'Kmore']); // Hãng sản xuất

        // Túi đựng laptop Sakos Handy SVC002N
        ProductAttribute::create(['product_id' => 112, 'attribute_id' => 29, 'value' => 'Vải polyester', 'short_value' => 'Polyester']); // Chất liệu
        ProductAttribute::create(['product_id' => 112, 'attribute_id' => 68, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng chống nước
        ProductAttribute::create(['product_id' => 112, 'attribute_id' => 118, 'value' => '2 ngăn', 'short_value' => '2 compartments']); // Số ngăn
        ProductAttribute::create(['product_id' => 112, 'attribute_id' => 119, 'value' => 'Có', 'short_value' => 'Yes']); // Đệm chống sốc
        ProductAttribute::create(['product_id' => 112, 'attribute_id' => 132, 'value' => 'Sakos', 'short_value' => 'Sakos']); // Hãng sản xuất

        // Giá đỡ Laptop S Case hợp kim nhôm đa năng cao cấp xám
        ProductAttribute::create(['product_id' => 113, 'attribute_id' => 29, 'value' => 'Hợp kim nhôm', 'short_value' => 'Aluminum']); // Chất liệu
        ProductAttribute::create(['product_id' => 113, 'attribute_id' => 69, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng điều chỉnh độ cao
        ProductAttribute::create(['product_id' => 113, 'attribute_id' => 120, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng gấp gọn
        ProductAttribute::create(['product_id' => 113, 'attribute_id' => 132, 'value' => 'S Case', 'short_value' => 'S Case']); // Hãng sản xuất

        // Giá đỡ Laptop Macbook S Case hộp kim nhôm đa năng cao cấp Bạc
        ProductAttribute::create(['product_id' => 114, 'attribute_id' => 29, 'value' => 'Hợp kim nhôm', 'short_value' => 'Aluminum']); // Chất liệu
        ProductAttribute::create(['product_id' => 114, 'attribute_id' => 69, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng điều chỉnh độ cao
        ProductAttribute::create(['product_id' => 114, 'attribute_id' => 120, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng gấp gọn
        ProductAttribute::create(['product_id' => 114, 'attribute_id' => 132, 'value' => 'S Case', 'short_value' => 'S Case']); // Hãng sản xuất

        // Giá đỡ Laptop Hyper Stand Folding Alunium HTU6
        ProductAttribute::create(['product_id' => 115, 'attribute_id' => 29, 'value' => 'Hợp kim nhôm', 'short_value' => 'Aluminum']); // Chất liệu
        ProductAttribute::create(['product_id' => 115, 'attribute_id' => 69, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng điều chỉnh độ cao
        ProductAttribute::create(['product_id' => 115, 'attribute_id' => 120, 'value' => 'Có', 'short_value' => 'Yes']); // Khả năng gấp gọn
        ProductAttribute::create(['product_id' => 115, 'attribute_id' => 132, 'value' => 'Hyper', 'short_value' => 'Hyper']); // Hãng sản xuất

        // Bộ vệ sinh Laptop 6 món
        ProductAttribute::create(['product_id' => 116, 'attribute_id' => 70, 'value' => 'Chổi, khăn, dung dịch vệ sinh', 'short_value' => 'Brush, cloth, solution']); // Thành phần
        ProductAttribute::create(['product_id' => 116, 'attribute_id' => 71, 'value' => '100ml', 'short_value' => '100ml']); // Dung tích
        ProductAttribute::create(['product_id' => 116, 'attribute_id' => 72, 'value' => 'Chổi, khăn, bình xịt', 'short_value' => 'Brush, cloth, spray']); // Phụ kiện đi kèm
        ProductAttribute::create(['product_id' => 116, 'attribute_id' => 121, 'value' => 'Dung dịch vệ sinh màn hình', 'short_value' => 'Screen cleaner']); // Loại dung dịch
        ProductAttribute::create(['product_id' => 116, 'attribute_id' => 132, 'value' => 'Không', 'short_value' => 'No']); // Hãng sản xuất

        // Bộ vệ sinh Laptop Pro 10 món
        ProductAttribute::create(['product_id' => 117, 'attribute_id' => 70, 'value' => 'Chổi, khăn, dung dịch vệ sinh, bông tăm', 'short_value' => 'Brush, cloth, solution, swabs']); // Thành phần
        ProductAttribute::create(['product_id' => 117, 'attribute_id' => 71, 'value' => '200ml', 'short_value' => '200ml']); // Dung tích
        ProductAttribute::create(['product_id' => 117, 'attribute_id' => 72, 'value' => 'Chổi, khăn, bình xịt, bông tăm, dụng cụ tháo phím', 'short_value' => 'Brush, cloth, spray, swabs, key tool']); // Phụ kiện đi kèm
        ProductAttribute::create(['product_id' => 117, 'attribute_id' => 121, 'value' => 'Dung dịch vệ sinh màn hình và bàn phím', 'short_value' => 'Screen & keyboard cleaner']); // Loại dung dịch
        ProductAttribute::create(['product_id' => 117, 'attribute_id' => 132, 'value' => 'Không', 'short_value' => 'No']); // Hãng sản xuất

        // hết hàng
        ProductAttribute::create(['product_id' => 118, 'attribute_id' => 1, 'value' => 'Intel Core i5-1235U', 'short_value' => 'i5-1235U', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 118, 'attribute_id' => 2, 'value' => '8GB DDR4', 'short_value' => '8GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 118, 'attribute_id' => 3, 'value' => '512GB SSD', 'short_value' => '512GB', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 118, 'attribute_id' => 4, 'value' => '15.6 inch Full HD', 'short_value' => '15.6" FHD', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 118, 'attribute_id' => 5, 'value' => 'Intel Iris Xe Graphics', 'short_value' => 'Iris Xe', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 118, 'attribute_id' => 6, 'value' => '3-cell 41Wh', 'short_value' => '41Wh', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 118, 'attribute_id' => 7, 'value' => 'Windows 11 Home', 'short_value' => 'Win11 Home', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 118, 'attribute_id' => 8, 'value' => '1.8kg', 'short_value' => '1.8kg', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 118, 'attribute_id' => 73, 'value' => 'USB-C, USB-A, HDMI', 'short_value' => 'USB-C/A, HDMI', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 118, 'attribute_id' => 74, 'value' => '720p HD', 'short_value' => '720p', 'created_at' => now(), 'updated_at' => now()]);
        ProductAttribute::create(['product_id' => 118, 'attribute_id' => 132, 'value' => 'Dell', 'short_value' => 'Dell', 'created_at' => now(), 'updated_at' => now()]);
    }
}
