<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImage::create([
            'product_id' => 1,
            'image' => 'Laptop-Dell-Latitude-3520-P108F001-70280538-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 1,
            'image' => 'Laptop-Dell-Latitude-3520-P108F001-70280538-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 1,
            'image' => 'Laptop-Dell-Latitude-3520-P108F001-70280538-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 2,
            'image' => 'Laptop-Dell Vostro-16-V5630-i5P085W11GRU-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 2,
            'image' => 'Laptop-Dell Vostro-16-V5630-i5P085W11GRU-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 2,
            'image' => 'Laptop-Dell Vostro-16-V5630-i5P085W11GRU-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 2,
            'image' => 'Laptop-Dell Vostro-16-V5630-i5P085W11GRU-4.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 3,
            'image' => 'Laptop-Dell-Inspiron-15-7501-X3MRY-1.jpg',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 3,
            'image' => 'Laptop-Dell-Inspiron-15-7501-X3MRY-2.jpg',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 3,
            'image' => 'Laptop-Dell-Inspiron-15-7501-X3MRY-3.jpg',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 4,
            'image' => 'Laptop-gaming-Dell-Alienware-M15-R6-P109F001CBL-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 4,
            'image' => 'Laptop-gaming-Dell-Alienware-M15-R6-P109F001CBL-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 4,
            'image' => 'Laptop-gaming-Dell-Alienware-M15-R6-P109F001CBL-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 5,
            'image' => 'Laptop-Dell-Inspiron-14-5440-i5U085W11IBU-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 5,
            'image' => 'Laptop-Dell-Inspiron-14-5440-i5U085W11IBU-2.jpg',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 5,
            'image' => 'Laptop-Dell-Inspiron-14-5440-i5U085W11IBU-3.jpg',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 6,
            'image' => 'Laptop-Lenovo-IdeaPad-Slim-3-15IRH10-83K1000JVN-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 6,
            'image' => 'Laptop-Lenovo-IdeaPad-Slim-3-15IRH10-83K1000JVN-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 6,
            'image' => 'Laptop-Lenovo-IdeaPad-Slim-3-15IRH10-83K1000JVN-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 7,
            'image' => 'Laptop-Lenovo-Yoga-Slim-7-14IMH9-83CV00AJVN-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 7,
            'image' => 'Laptop-Lenovo-Yoga-Slim-7-14IMH9-83CV00AJVN-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 7,
            'image' => 'Laptop-Lenovo-Yoga-Slim-7-14IMH9-83CV00AJVN-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 8,
            'image' => 'Laptop-Lenovo-ThinkPad-X9-15-Gen-1-21Q60055VN-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 8,
            'image' => 'Laptop-Lenovo-ThinkPad-X9-15-Gen-1-21Q60055VN-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 8,
            'image' => 'Laptop-Lenovo-ThinkPad-X9-15-Gen-1-21Q60055VN-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 9,
            'image' => 'Laptop-gaming-Lenovo-LOQ-15IRX9-83DV013PVN-1.jpg',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 9,
            'image' => 'Laptop-gaming-Lenovo-LOQ-15IRX9-83DV013PVN-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 9,
            'image' => 'Laptop-gaming-Lenovo-LOQ-15IRX9-83DV013PVN-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 10,
            'image' => 'Laptop-gaming-Lenovo-Legion-Pro-7-16IAX10H-83F5008WVN-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 10,
            'image' => 'Laptop-gaming-Lenovo-Legion-Pro-7-16IAX10H-83F5008WVN-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 10,
            'image' => 'Laptop-gaming-Lenovo-Legion-Pro-7-16IAX10H-83F5008WVN-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 11,
            'image' => 'Laptop-Acer-Aspire-3-A314-42P-R3B3-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 11,
            'image' => 'Laptop-Acer-Aspire-3-A314-42P-R3B3-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 11,
            'image' => 'Laptop-Acer-Aspire-3-A314-42P-R3B3-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 12,
            'image' => 'Laptop-Acer-Aspire-Lite-AL15-72P-7232-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 12,
            'image' => 'Laptop-Acer-Aspire-Lite-AL15-72P-7232-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 12,
            'image' => 'Laptop-Acer-Aspire-Lite-AL15-72P-7232-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 13,
            'image' => 'Laptop-Acer-Aspire-Go-AG14-71M-7681-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 13,
            'image' => 'Laptop-Acer-Aspire-Go-AG14-71M-7681-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 13,
            'image' => 'Laptop-Acer-Aspire-Go-AG14-71M-7681-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 14,
            'image' => 'Laptop-Acer-Swift-X14-SFX14-71G-78SY-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 14,
            'image' => 'Laptop-Acer-Swift-X14-SFX14-71G-78SY-2.jpg',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 14,
            'image' => 'Laptop-Acer-Swift-X14-SFX14-71G-78SY-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 15,
            'image' => 'Laptop-Acer-Swift-Go-14-SFG14-73-75YM-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 15,
            'image' => 'Laptop-Acer-Swift-Go-14-SFG14-73-75YM-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 15,
            'image' => 'Laptop-Acer-Swift-Go-14-SFG14-73-75YM-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 16,
            'image' => 'Laptop-ASUS-ExpertBook-P1-P1503CVA-i5SE16-50W-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 16,
            'image' => 'Laptop-ASUS-ExpertBook-P1-P1503CVA-i5SE16-50W-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 16,
            'image' => 'Laptop-ASUS-ExpertBook-P1-P1503CVA-i5SE16-50W-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 17,
            'image' => 'Laptop-ASUS-Vivobook-S-15-OLED-S5507QA-MA090WS-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 17,
            'image' => 'Laptop-ASUS-Vivobook-S-15-OLED-S5507QA-MA090WS-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 17,
            'image' => 'Laptop-ASUS-Vivobook-S-15-OLED-S5507QA-MA090WS-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 18,
            'image' => 'Laptop-ASUS-Vivobook-S14-S3407CA-LY095WS-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 18,
            'image' => 'Laptop-ASUS-Vivobook-S14-S3407CA-LY095WS-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 18,
            'image' => 'Laptop-ASUS-Vivobook-S14-S3407CA-LY095WS-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 19,
            'image' => 'Laptop-ASUS-Zenbook-14-UX3405CA-PZ204WS-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 19,
            'image' => 'Laptop-ASUS-Zenbook-14-UX3405CA-PZ204WS-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 19,
            'image' => 'Laptop-ASUS-Zenbook-14-UX3405CA-PZ204WS-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 20,
            'image' => 'Laptop-ASUS-Expertbook-P1403CVA-i716-50W-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 20,
            'image' => 'Laptop-ASUS-Expertbook-P1403CVA-i716-50W-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 20,
            'image' => 'Laptop-ASUS-Expertbook-P1403CVA-i716-50W-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 21,
            'image' => 'PC-Homework-i5-12400-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 22,
            'image' => 'PC-Intel-i9-14900K-VGA-RTX-4060-Ti-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 22,
            'image' => 'PC-Intel-i9-14900K-VGA-RTX-4060-Ti-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 22,
            'image' => 'PC-Intel-i9-14900K-VGA-RTX-4060-Ti-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 23,
            'image' => 'PC-GVN-Homework-Athlon-3000G-1.jpg',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 23,
            'image' => 'PC-GVN-Homework-Athlon-3000G-2.jpg',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 23,
            'image' => 'PC-GVN-Homework-Athlon-3000G-3.jpg',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 24,
            'image' => 'PC-GVN-Intel-i5-12400F-VGA-RTX-5060-Main-H-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 24,
            'image' => 'PC-GVN-Intel-i5-12400F-VGA-RTX-5060-Main-H-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 24,
            'image' => 'PC-GVN-Intel-i5-12400F-VGA-RTX-5060-Main-H-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 25,
            'image' => 'PC-GVN-INTEL-I5-12400FVGA-RTX-5050-1.jpg',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 25,
            'image' => 'PC-GVN-INTEL-I5-12400FVGA-RTX-5050-2.jpg',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 25,
            'image' => 'PC-GVN-INTEL-I5-12400FVGA-RTX-5050-3.jpg',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 26,
            'image' => 'Sạc Laptop-ACER-90W-19V-4-74A-5-5-1-7mm-TTA-AC90-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 26,
            'image' => 'Sạc Laptop-ACER-90W-19V-4-74A-5-5-1-7mm-TTA-AC90-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 27,
            'image' => 'Sạc-Laptop-Asus-19V-342A-chân-thường-55mm-25mm, củ vuông-1.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 27,
            'image' => 'Sạc-Laptop-Asus-19V-342A-chân-thường-55mm-25mm, củ vuông-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 27,
            'image' => 'Sạc-Laptop-Asus-19V-342A-chân-thường-55mm-25mm, củ vuông-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 28,
            'image' => 'Sạc Laptop DELL OVAN 65W - 195V - 334A (45 30) CHÂN KIM NHỎ - TTA - DE65NM130-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 28,
            'image' => 'Sạc Laptop DELL OVAN 65W - 195V - 334A (45 30) CHÂN KIM NHỎ - TTA - DE65NM130-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 29,
            'image' => 'Màn Hình Laptop 15.6 inch Slim 40 Pin narrow EDP IPS NE156FHM-NZ1 240HZ-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 29,
            'image' => 'Màn Hình Laptop 15.6 inch Slim 40 Pin narrow EDP IPS NE156FHM-NZ1 240HZ-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 30,
            'image' => 'Màn hình Laptop 14 inch N140HCE-G52 NV140FHM-N47 30 Pin FHD-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 30,
            'image' => 'Màn hình Laptop 14 inch N140HCE-G52 NV140FHM-N47 30 Pin FHD-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 30,
            'image' => 'Màn hình Laptop 14 inch N140HCE-G52 NV140FHM-N47 30 Pin FHD-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 31,
            'image' => 'Màn hình laptop 14 inch Asus Vivobook TM420 N140HCA-EAC FHD 60 Hz Gương 30 Pin Cảm Ứng-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 31,
            'image' => 'Màn hình laptop 14 inch Asus Vivobook TM420 N140HCA-EAC FHD 60 Hz Gương 30 Pin Cảm Ứng-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 32,
            'image' => 'RAM-Laptop-Kingston-1-2-8GB-3200MHz-KVR32S22S8-8-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 32,
            'image' => 'RAM-Laptop-Kingston-1-2-8GB-3200MHz-KVR32S22S8-8-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 33,
            'image' => 'RAM-Laptop-Lexar-8GB-3200MHZ-DDR4-CL22-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 33,
            'image' => 'RAM-Laptop-Lexar-8GB-3200MHZ-DDR4-CL22-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 34,
            'image' => 'RAM-PC-ADATA-XPG-D50-RGB-16GB-3200MHz-DDR4-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 34,
            'image' => 'RAM-PC-ADATA-XPG-D50-RGB-16GB-3200MHz-DDR4-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 35,
            'image' => 'Ổ-cứng-SSD-Kingston-NV3-PCIe-4-0-NVMe-1TB-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 35,
            'image' => 'Ổ-cứng-SSD-Kingston-NV3-PCIe-4-0-NVMe-1TB-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 35,
            'image' => 'Ổ-cứng-SSD-Kingston-NV3-PCIe-4-0-NVMe-1TB-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 36,
            'image' => 'Ổ-cứng-SSD-ADATA-SU650-SATA-III-2-5-512GB-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 36,
            'image' => 'Ổ-cứng-SSD-ADATA-SU650-SATA-III-2-5-512GB-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 36,
            'image' => 'Ổ-cứng-SSD-ADATA-SU650-SATA-III-2-5-512GB-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 37,
            'image' => 'Ổ-cứng-SSD-ADATA-LEGEND-860-PCIE-GEN4-X4-M-2-2280-R-6000-W-5000-500GB-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 37,
            'image' => 'Ổ-cứng-SSD-ADATA-LEGEND-860-PCIE-GEN4-X4-M-2-2280-R-6000-W-5000-500GB-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 37,
            'image' => 'Ổ-cứng-SSD-ADATA-LEGEND-860-PCIE-GEN4-X4-M-2-2280-R-6000-W-5000-500GB-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 38,
            'image' => 'Bàn-phím-Laptop-Acer-Aspire-4736-3750-3935-4250-4251-4252-4253-4333-4336-4535-4551-4735-4935-4937-3810-4810-4810T-4235-4540-4240-4740G-4733-4738-4740-4741-4745-4743-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 39,
            'image' => 'Bàn-phím-Laptop-Toshiba-Satellite-L640-L600-L630-L635-L645-L745-C600-C640-L735.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 40,
            'image' => 'Bàn-phím-Laptop-Asus-K50-K50A-K50I-K50IJ-K50IN-P50.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 41,
            'image' => 'Màn-hình-thông-minh-LG-MyView-25SR50F-25-inch-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 41,
            'image' => 'Màn-hình-thông-minh-LG-MyView-25SR50F-25-inch-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 41,
            'image' => 'Màn-hình-thông-minh-LG-MyView-25SR50F-25-inch-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 42,
            'image' => 'Màn-hình-văn-phòng-Dell-U2424H-24-inch-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 42,
            'image' => 'Màn-hình-văn-phòng-Dell-U2424H-24-inch-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 42,
            'image' => 'Màn-hình-văn-phòng-Dell-U2424H-24-inch-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 43,
            'image' => 'Màn-hình-Xiaomi-A27QI-27-inch-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 43,
            'image' => 'Màn-hình-Xiaomi-A27QI-27-inch-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 43,
            'image' => 'Màn-hình-Xiaomi-A27QI-27-inch-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 44,
            'image' => 'Quạt-led-Xigmatek-Infinity-Reverse-120mm-Fan-Fixed-RGB-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 44,
            'image' => 'Quạt-led-Xigmatek-Infinity-Reverse-120mm-Fan-Fixed-RGB-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 44,
            'image' => 'Quạt-led-Xigmatek-Infinity-Reverse-120mm-Fan-Fixed-RGB-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 45,
            'image' => 'Tản-nhiệt-nước-Cooler-Master-ML240L-V2-RGB-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 45,
            'image' => 'Tản-nhiệt-nước-Cooler-Master-ML240L-V2-RGB-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 46,
            'image' => 'Tản-nhiệt-nước-AIO-DeepCool-Mystique-240-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 46,
            'image' => 'Tản-nhiệt-nước-AIO-DeepCool-Mystique-240-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 47,
            'image' => 'RAM-PC-Kingston-Fury-Beast-Blac-16GB-3200MHz-DDR4-KF432C16BB1-16-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 47,
            'image' => 'RAM-PC-Kingston-Fury-Beast-Blac-16GB-3200MHz-DDR4-KF432C16BB1-16-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 47,
            'image' => 'RAM-PC-Kingston-Fury-Beast-Blac-16GB-3200MHz-DDR4-KF432C16BB1-16-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 48,
            'image' => 'RAM-PC-ADATA-XPG-D50-RGB-16GB-1x16GB-3200MHz-DDR4-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 48,
            'image' => 'RAM-PC-ADATA-XPG-D50-RGB-16GB-1x16GB-3200MHz-DDR4-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 48,
            'image' => 'RAM-PC-ADATA-XPG-D50-RGB-16GB-1x16GB-3200MHz-DDR4-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 49,
            'image' => 'RAM-PC-Kingston-Fury-8GB-3200MHz-KF432C16BB-8-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 49,
            'image' => 'RAM-PC-Kingston-Fury-8GB-3200MHz-KF432C16BB-8-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 49,
            'image' => 'RAM-PC-Kingston-Fury-8GB-3200MHz-KF432C16BB-8-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 50,
            'image' => 'Case-máy-tính-Xigmatek-MYX-3F-3-FAN-M-ATX-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 50,
            'image' => 'Case-máy-tính-Xigmatek-MYX-3F-3-FAN-M-ATX-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 50,
            'image' => 'Case-máy-tính-Xigmatek-MYX-3F-3-FAN-M-ATX-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 51,
            'image' => 'Case-máy-tính-DeepCool-Macube-110-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 51,
            'image' => 'Case-máy-tính-DeepCool-Macube-110-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 51,
            'image' => 'Case-máy-tính-DeepCool-Macube-110-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 52,
            'image' => 'Case-máy-tính-MSI-MAG-FORGE-320R-AIRFLOW-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 52,
            'image' => 'Case-máy-tính-MSI-MAG-FORGE-320R-AIRFLOW-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 52,
            'image' => 'Case-máy-tính-MSI-MAG-FORGE-320R-AIRFLOW-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 53,
            'image' => 'Nguồn-máy-tính-Xigmatek-X-Power-III-650-600W-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 53,
            'image' => 'Nguồn-máy-tính-Xigmatek-X-Power-III-650-600W-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 53,
            'image' => 'Nguồn-máy-tính-Xigmatek-X-Power-III-650-600W-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 54,
            'image' => 'Nguồn-máy-tính-MSI-Mag-A650BNL-Đen-650W-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 54,
            'image' => 'Nguồn-máy-tính-MSI-Mag-A650BNL-Đen-650W-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 54,
            'image' => 'Nguồn-máy-tính-MSI-Mag-A650BNL-Đen-650W-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 55,
            'image' => 'Nguồn-máy-tính-Gigabyte-P650SS-650W-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 55,
            'image' => 'Nguồn-máy-tính-Gigabyte-P650SS-650W-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 55,
            'image' => 'Nguồn-máy-tính-Gigabyte-P650SS-650W-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 56,
            'image' => 'Mainboard-Gigabyte-B760M-Gaming-Plus-Wifi-D4-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 56,
            'image' => 'Mainboard-Gigabyte-B760M-Gaming-Plus-Wifi-D4-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 56,
            'image' => 'Mainboard-Gigabyte-B760M-Gaming-Plus-Wifi-D4-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 57,
            'image' => 'Mainboard-Asus-TUF-Gaming-B760M-PLUS-Wifi-D4-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 57,
            'image' => 'Mainboard-Asus-TUF-Gaming-B760M-PLUS-Wifi-D4-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 57,
            'image' => 'Mainboard-Asus-TUF-Gaming-B760M-PLUS-Wifi-D4-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 58,
            'image' => 'Mainboard-MSI-Pro-B760M-E-DDR4-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 58,
            'image' => 'Mainboard-MSI-Pro-B760M-E-DDR4-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 58,
            'image' => 'Mainboard-MSI-Pro-B760M-E-DDR4-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 59,
            'image' => 'VGA-Asus-Dual-Radeon-RX-6500-XT-OC-4GB-DUAL-RX6500XT-O4G-V2-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 59,
            'image' => 'VGA-Asus-Dual-Radeon-RX-6500-XT-OC-4GB-DUAL-RX6500XT-O4G-V2-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 59,
            'image' => 'VGA-Asus-Dual-Radeon-RX-6500-XT-OC-4GB-DUAL-RX6500XT-O4G-V2-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 60,
            'image' => 'VGA-MSI-GeForce-RTX-3060-VENTUS-2X-12G-OC-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 60,
            'image' => 'VGA-MSI-GeForce-RTX-3060-VENTUS-2X-12G-OC-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 60,
            'image' => 'VGA-MSI-GeForce-RTX-3060-VENTUS-2X-12G-OC-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 61,
            'image' => 'VGA-Gigabyte-Radeon-RX-6500-XT-Eagle-4GB-GV-R65XTEAGLE-4GD-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 61,
            'image' => 'VGA-Gigabyte-Radeon-RX-6500-XT-Eagle-4GB-GV-R65XTEAGLE-4GD-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 61,
            'image' => 'VGA-Gigabyte-Radeon-RX-6500-XT-Eagle-4GB-GV-R65XTEAGLE-4GD-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 62,
            'image' => 'CPU-Intel-Core-i5-12400F-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 63,
            'image' => 'CPU-Intel-Core-i3-12100F-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 64,
            'image' => 'CPU-AMD-Ryzen-5-5500-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 65,
            'image' => 'Bàn-phím-cơ-E-DRA-không-dây-EK368L-Alpha-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 65,
            'image' => 'Bàn-phím-cơ-E-DRA-không-dây-EK368L-Alpha-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 65,
            'image' => 'Bàn-phím-cơ-E-DRA-không-dây-EK368L-Alpha-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 66,
            'image' => 'Bàn-phím-Gaming-MSI-Force-GK100-RGB-Led-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 66,
            'image' => 'Bàn-phím-Gaming-MSI-Force-GK100-RGB-Led-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 66,
            'image' => 'Bàn-phím-Gaming-MSI-Force-GK100-RGB-Led-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 67,
            'image' => 'Bàn-phím-có-dây-Logitech-K120-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 67,
            'image' => 'Bàn-phím-có-dây-Logitech-K120-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 67,
            'image' => 'Bàn-phím-có-dây-Logitech-K120-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 68,
            'image' => 'Chuột-không-dây-Logitech-MX-Anywhere-3S-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 68,
            'image' => 'Chuột-không-dây-Logitech-MX-Anywhere-3S-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 68,
            'image' => 'Chuột-không-dây-Logitech-MX-Anywhere-3S-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 69,
            'image' => 'Chuột-có-dây-Gaming-Logitech-G102-LightSync-Gen-2-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 69,
            'image' => 'Chuột-có-dây-Gaming-Logitech-G102-LightSync-Gen-2-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 69,
            'image' => 'Chuột-có-dây-Gaming-Logitech-G102-LightSync-Gen-2-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 70,
            'image' => 'Chuột-có-dây-Logitech-B100-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 70,
            'image' => 'Chuột-có-dây-Logitech-B100-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 70,
            'image' => 'Chuột-có-dây-Logitech-B100-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 71,
            'image' => 'Webcam-Logitech-Brio-100-Graphite-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 71,
            'image' => 'Webcam-Logitech-Brio-100-Graphite-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 71,
            'image' => 'Webcam-Logitech-Brio-100-Graphite-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 72,
            'image' => 'Webcam-Rapoo-C270L-1080p-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 72,
            'image' => 'Webcam-Rapoo-C270L-1080p-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 72,
            'image' => 'Webcam-Rapoo-C270L-1080p-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 73,
            'image' => 'Webcam-Rapoo-C280-2K-1440p-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 73,
            'image' => 'Webcam-Rapoo-C280-2K-1440p-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 73,
            'image' => 'Webcam-Rapoo-C280-2K-1440p-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 74,
            'image' => 'Camera-IP-360-độ-8MP-EZVIZ-H6C-G1-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 74,
            'image' => 'Camera-IP-360-độ-8MP-EZVIZ-H6C-G1-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 74,
            'image' => 'Camera-IP-360-độ-8MP-EZVIZ-H6C-G1-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 75,
            'image' => 'Camera-IP-ngoài-trời-360-độ-3MP-365-Selection-OC1-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 75,
            'image' => 'Camera-IP-ngoài-trời-360-độ-3MP-365-Selection-OC1-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 75,
            'image' => 'Camera-IP-ngoài-trời-360-độ-3MP-365-Selection-OC1-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 76,
            'image' => 'Camera-IP-EZVIZ-H6C-Pro-3K-5MP-trong-nhà-360-độ-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 76,
            'image' => 'Camera-IP-EZVIZ-H6C-Pro-3K-5MP-trong-nhà-360-độ-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 76,
            'image' => 'Camera-IP-EZVIZ-H6C-Pro-3K-5MP-trong-nhà-360-độ-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 77,
            'image' => 'Đầu-ghi-Acusense-16-kênh-Hikvision-DS-7616NXI-K1-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 78,
            'image' => 'ĐẦU-GHI-8-KÊNH-EZVIZ-CS-X5S-R100-8W-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 78,
            'image' => 'ĐẦU-GHI-8-KÊNH-EZVIZ-CS-X5S-R100-8W-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 79,
            'image' => 'ĐẦU-GHI-4-KÊNH-EZVIZ-CS-X5S-R100-4W-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 79,
            'image' => 'ĐẦU-GHI-4-KÊNH-EZVIZ-CS-X5S-R100-4W-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 79,
            'image' => 'ĐẦU-GHI-4-KÊNH-EZVIZ-CS-X5S-R100-4W-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 80,
            'image' => 'Ổ-Cứng-Western-Digital-Purple-6TB-256MB-Cache-WD64PURZ-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 81,
            'image' => 'Ổ-cứng-Seagate-Skyhawk-3TB-3-5-ST3000VX009-Chuyên-dụng-cho-Camera-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 82,
            'image' => 'Thẻ-nhớ-MicroSD-Kingston-64GB-Canvas-Select-Plus-100R-A1-C10-SDCS2-64GBSP-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 83,
            'image' => 'Máy-in-Laser-đen-trắng-Canon-LBP-6030w-In-A4-USB-Wifi-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 83,
            'image' => 'Máy-in-Laser-đen-trắng-Canon-LBP-6030w-In-A4-USB-Wifi-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 83,
            'image' => 'Máy-in-Laser-đen-trắng-Canon-LBP-6030w-In-A4-USB-Wifi-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 84,
            'image' => 'Máy-in-laser-đen trắng-HP-108W-4ZB80A-In-A4-A5-USB-WIFI-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 84,
            'image' => 'Máy-in-laser-đen trắng-HP-108W-4ZB80A-In-A4-A5-USB-WIFI-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 84,
            'image' => 'Máy-in-laser-đen trắng-HP-108W-4ZB80A-In-A4-A5-USB-WIFI-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 85,
            'image' => 'Máy-in-laser-đen-trắng-Canon-LBP-243DW-In-đảo-mặt-A4-A5-USB-LAN-WIFI-Chính-hãng-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 85,
            'image' => 'Máy-in-laser-đen-trắng-Canon-LBP-243DW-In-đảo-mặt-A4-A5-USB-LAN-WIFI-Chính-hãng-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 85,
            'image' => 'Máy-in-laser-đen-trắng-Canon-LBP-243DW-In-đảo-mặt-A4-A5-USB-LAN-WIFI-Chính-hãng-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ProductImage::create([
            'product_id' => 86,
            'image' => 'Máy-in-hóa-đơn-di-động-APOS-P103-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 86,
            'image' => 'Máy-in-hóa-đơn-di-động-APOS-P103-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 86,
            'image' => 'Máy-in-hóa-đơn-di-động-APOS-P103-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 87,
            'image' => 'Màn-hình-hiển-thị-QR-động-thanh-toán-thông-minh-TingBox-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 87,
            'image' => 'Màn-hình-hiển-thị-QR-động-thanh-toán-thông-minh-TingBox-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 87,
            'image' => 'Màn-hình-hiển-thị-QR-động-thanh-toán-thông-minh-TingBox-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 88,
            'image' => 'Máy-quẹt-thẻ-ngân-hàng-Mpos-nhỏ-gọn-tiện-lợi-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 88,
            'image' => 'Máy-quẹt-thẻ-ngân-hàng-Mpos-nhỏ-gọn-tiện-lợi-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 88,
            'image' => 'Máy-quẹt-thẻ-ngân-hàng-Mpos-nhỏ-gọn-tiện-lợi-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 89,
            'image' => 'Phần-mềm-M365-Family-English-APAC-Subscr-1YR-Medialess-EP2-36878-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 90,
            'image' => 'Bkav-Pro-Internet-Security-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 91,
            'image' => 'Phần-mềm-Microsoft-Windows-GGWA-Windows-11-Pro-Legalization-Get-Genuine-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        ProductImage::create([
            'product_id' => 92,
            'image' => 'Bộ-phát-wifi-6-Asus-RT-AX1800HP-v2-MU-MIMO-AX1800Mbps-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 92,
            'image' => 'Bộ-phát-wifi-6-Asus-RT-AX1800HP-v2-MU-MIMO-AX1800Mbps-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 92,
            'image' => 'Bộ-phát-wifi-6-Asus-RT-AX1800HP-v2-MU-MIMO-AX1800Mbps-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 93,
            'image' => 'Switch-8port-TP-Link-TL-SG108E-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 93,
            'image' => 'Switch-8port-TP-Link-TL-SG108E-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 93,
            'image' => 'Switch-8port-TP-Link-TL-SG108E-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 94,
            'image' => 'Bộ-Test-Cáp-Mạng-Test-POE-Dò-Dây-Line-Ugreen-10950-cao-cấp-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 94,
            'image' => 'Bộ-Test-Cáp-Mạng-Test-POE-Dò-Dây-Line-Ugreen-10950-cao-cấp-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 94,
            'image' => 'Bộ-Test-Cáp-Mạng-Test-POE-Dò-Dây-Line-Ugreen-10950-cao-cấp-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 95,
            'image' => 'Tai-nghe-Razer-BlackShark-V2-X-USB-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 95,
            'image' => 'Tai-nghe-Razer-BlackShark-V2-X-USB-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 95,
            'image' => 'Tai-nghe-Razer-BlackShark-V2-X-USB-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 96,
            'image' => 'Tai-nghe-HyperX-Cloud-III-Wireless-Black-Red-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 96,
            'image' => 'Tai-nghe-HyperX-Cloud-III-Wireless-Black-Red-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 96,
            'image' => 'Tai-nghe-HyperX-Cloud-III-Wireless-Black-Red-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 97,
            'image' => 'Tai-nghe-Razer-BlackShark-V3-Pro-Black-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 97,
            'image' => 'Tai-nghe-Razer-BlackShark-V3-Pro-Black-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 97,
            'image' => 'Tai-nghe-Razer-BlackShark-V3-Pro-Black-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 98,
            'image' => 'Loa-Thonet-&-Vander-Vertrag-Bluetooth-Woodskin-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 98,
            'image' => 'Loa-Thonet-&-Vander-Vertrag-Bluetooth-Woodskin-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 98,
            'image' => 'Loa-Thonet-&-Vander-Vertrag-Bluetooth-Woodskin-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 99,
            'image' => 'Loa-Edifier-MR3-2-0-Bluetooth-Black-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 99,
            'image' => 'Loa-Edifier-MR3-2-0-Bluetooth-Black-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 99,
            'image' => 'Loa-Edifier-MR3-2-0-Bluetooth-Black-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 100,
            'image' => 'Loa-Edifier-G1500-MAX-2-1-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 100,
            'image' => 'Loa-Edifier-G1500-MAX-2-1-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 100,
            'image' => 'Loa-Edifier-G1500-MAX-2-1-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 101,
            'image' => 'USB-Lexar-JumpDrive-D400-64GB-USB-C-LJDD400064G-BNQNG-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 101,
            'image' => 'USB-Lexar-JumpDrive-D400-64GB-USB-C-LJDD400064G-BNQNG-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 101,
            'image' => 'USB-Lexar-JumpDrive-D400-64GB-USB-C-LJDD400064G-BNQNG-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 102,
            'image' => 'Ổ-cứng-di-động-HDD-WD-Elements-Portable-6TB-2-5-USB-3-0-WDBHJS0060BBK-WESN-Đen-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 103,
            'image' => 'Box-ổ-cứng-SSD-M2-hỗ-trợ-NVME-SATA-USB-Type-C-3-2-GEN2-tốc-độ-10Gbps-Ugreen-90264-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 103,
            'image' => 'Box-ổ-cứng-SSD-M2-hỗ-trợ-NVME-SATA-USB-Type-C-3-2-GEN2-tốc-độ-10Gbps-Ugreen-90264-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 104,
            'image' => 'Thẻ-nhớ-SanDisk-Ultra-64GB-MicroSDXC-C10-UHS-1-100MB-s-SDSQUNR-064G-GN3MN-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 105,
            'image' => 'Thẻ-nhớ-Micro-SD-HIKSEMI-NEO-64GB.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 106,
            'image' => 'Thẻ-nhớ-Micro-SD-Samsung-EVO-Plus-64GB.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 107,
            'image' => 'Cáp-HDMI-1-4-dài-50m-Ugreen.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 108,
            'image' => 'Cáp-VGA-tròn-Vention-VAG-B04-B1000-10m.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 109,
            'image' => 'Cáp-dữ-liệu-AV-3-5mm-truyền-âm-thanh-dài-5M-Ugreen.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 110,
            'image' => 'Balo-Laptop-Acer-Gaming-Suv-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 110,
            'image' => 'Balo-Laptop-Acer-Gaming-Suv-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 110,
            'image' => 'Balo-Laptop-Acer-Gaming-Suv-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 111,
            'image' => 'Balo-laptop-Kmore-Micah-Backpack-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 111,
            'image' => 'Balo-laptop-Kmore-Micah-Backpack-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 111,
            'image' => 'Balo-laptop-Kmore-Micah-Backpack-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 112,
            'image' => 'Túi-đựng-laptop-Sakos-Handy-SVC002N-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 112,
            'image' => 'Túi-đựng-laptop-Sakos-Handy-SVC002N-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 112,
            'image' => 'Túi-đựng-laptop-Sakos-Handy-SVC002N-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 113,
            'image' => 'Giá-đỡ-Laptop-S-Case-hợp-kim-nhôm-đa-năng-cao-cấp-xám.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 114,
            'image' => 'Giá-đỡ-Laptop-Macbook-S-Case-hộp-kim-nhôm-đa-năng-cao-cấp-Bạc.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 115,
            'image' => 'Giá-đỡ-Laptop-Hyper-Stand-Folding-Alunium-HTU6-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 115,
            'image' => 'Giá-đỡ-Laptop-Hyper-Stand-Folding-Alunium-HTU6-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 115,
            'image' => 'Giá-đỡ-Laptop-Hyper-Stand-Folding-Alunium-HTU6-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 116,
            'image' => 'Bộ-vệ-sinh-Laptop-6-món-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 116,
            'image' => 'Bộ-vệ-sinh-Laptop-6-món-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 117,
            'image' => 'Bộ-vệ-sinh-Laptop-Pro-10-món-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 117,
            'image' => 'Bộ-vệ-sinh-Laptop-Pro-10-món-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // hết hàng
        ProductImage::create([
            'product_id' => 118,
            'image' => 'Laptop-Dell-Vostro-3520-5M2TT2-1.png',
            'is_primary' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 118,
            'image' => 'Laptop-Dell-Vostro-3520-5M2TT2-2.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductImage::create([
            'product_id' => 118,
            'image' => 'Laptop-Dell-Vostro-3520-5M2TT2-3.png',
            'is_primary' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
