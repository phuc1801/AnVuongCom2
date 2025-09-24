<?php

namespace Database\Seeders;

use App\Models\ProductSerial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSerialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSerial::create(['serial_number' => 'DL3520-001', 'product_id' => 1, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'DL3520-002', 'product_id' => 1, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'DL3520-003', 'product_id' => 1, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'DL3520-004', 'product_id' => 1, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'DL3520-005', 'product_id' => 1, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'DL5630-001', 'product_id' => 2, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'DL5630-002', 'product_id' => 2, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'DL5630-003', 'product_id' => 2, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'DL7501-001', 'product_id' => 3, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'DL7501-002', 'product_id' => 3, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'DL7501-003', 'product_id' => 3, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'DL7501-004', 'product_id' => 3, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'DLM15R6-001', 'product_id' => 4, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'DLM15R6-002', 'product_id' => 4, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'DL5440-001', 'product_id' => 5, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'LEN15IRH10-001', 'product_id' => 6, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'LEN15IRH10-002', 'product_id' => 6, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'LEN15IRH10-003', 'product_id' => 6, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'LEN15IRH10-004', 'product_id' => 6, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'LEN14IMH9-001', 'product_id' => 7, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'LEN14IMH9-002', 'product_id' => 7, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'LEN15IRX9-001', 'product_id' => 8, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'LEN16IAX10H-001', 'product_id' => 9, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'LEGIONPRO7-001', 'product_id' => 10, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'LEGIONPRO7-002', 'product_id' => 10, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'LEGIONPRO7-003', 'product_id' => 10, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'ACEA314-001', 'product_id' => 11, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'ACEA314-002', 'product_id' => 11, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'ACEAL15-001', 'product_id' => 12, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'ACEAG14-001', 'product_id' => 13, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'ACEAG14-002', 'product_id' => 13, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'ACESFX14-001', 'product_id' => 14, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'ACESFG14-001', 'product_id' => 15, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'ACESFG14-002', 'product_id' => 15, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'ASUP1503-001', 'product_id' => 16, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'ASUP1503-002', 'product_id' => 16, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'ASUP1503-003', 'product_id' => 16, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'ASUS5507-001', 'product_id' => 17, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'ASUS3407-001', 'product_id' => 18, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'ASUS3407-002', 'product_id' => 18, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'ASUUX340-001', 'product_id' => 19, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'ASUUX340-002', 'product_id' => 19, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'ASUUX340-003', 'product_id' => 19, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'ASUUX340-004', 'product_id' => 19, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'ASUP1403-001', 'product_id' => 20, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PCHOMEI512400-001', 'product_id' => 21, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PCI914900K-001', 'product_id' => 22, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCI914900K-002', 'product_id' => 22, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCI914900K-003', 'product_id' => 22, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCI914900K-004', 'product_id' => 22, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PCHOMEALN-001', 'product_id' => 23, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCHOMEALN-002', 'product_id' => 23, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCHOMEALN-003', 'product_id' => 23, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCHOMEALN-004', 'product_id' => 23, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCHOMEALN-005', 'product_id' => 23, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PCI512400F5060-001', 'product_id' => 24, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCI512400F5060-002', 'product_id' => 24, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCI512400F5060-003', 'product_id' => 24, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCI512400F5060-004', 'product_id' => 24, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PCI512400F5050-001', 'product_id' => 25, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCI512400F5050-002', 'product_id' => 25, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PCI512400F5050-003', 'product_id' => 25, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'SACER90W-001', 'product_id' => 26, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SACER90W-002', 'product_id' => 26, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SACER90W-003', 'product_id' => 26, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SACER90W-004', 'product_id' => 26, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'SASUS19V-001', 'product_id' => 27, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SASUS19V-002', 'product_id' => 27, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SASUS19V-003', 'product_id' => 27, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SASUS19V-004', 'product_id' => 27, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SASUS19V-005', 'product_id' => 27, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'SADEL65W-001', 'product_id' => 28, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SADEL65W-002', 'product_id' => 28, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SADEL65W-003', 'product_id' => 28, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MHNE156FHM-001', 'product_id' => 29, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MHN140HCE-001', 'product_id' => 30, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MHN140HCE-002', 'product_id' => 30, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MHN140HCE-003', 'product_id' => 30, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MHN140HCA-001', 'product_id' => 31, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MHN140HCA-002', 'product_id' => 31, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MHN140HCA-003', 'product_id' => 31, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MHN140HCA-004', 'product_id' => 31, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'RAMKING128-001', 'product_id' => 32, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'RAMKING128-002', 'product_id' => 32, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'RAMKING128-003', 'product_id' => 32, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'RAMKING128-004', 'product_id' => 32, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'RAMLEXAR8-001', 'product_id' => 33, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'RAMLEXAR8-002', 'product_id' => 33, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'RAMADATA16-001', 'product_id' => 34, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'SSDKING1TB-001', 'product_id' => 35, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SSDKING1TB-002', 'product_id' => 35, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'SSDATA512-001', 'product_id' => 36, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SSDATA512-002', 'product_id' => 36, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SSDATA512-003', 'product_id' => 36, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'SSDATA500-001', 'product_id' => 37, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SSDATA500-002', 'product_id' => 37, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'KBDACERSP-001', 'product_id' => 38, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBDACERSP-002', 'product_id' => 38, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBDACERSP-003', 'product_id' => 38, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBDACERSP-004', 'product_id' => 38, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'KBDTOSHIBASL-001', 'product_id' => 39, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBDTOSHIBASL-002', 'product_id' => 39, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBDTOSHIBASL-003', 'product_id' => 39, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'KBASUSKP-001', 'product_id' => 40, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBASUSKP-002', 'product_id' => 40, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBASUSKP-003', 'product_id' => 40, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MONLG25-001', 'product_id' => 41, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MONLG25-002', 'product_id' => 41, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MONLG25-003', 'product_id' => 41, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MONLG25-004', 'product_id' => 41, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MONDELL24-001', 'product_id' => 42, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MONXIAOMI27-001', 'product_id' => 43, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MONXIAOMI27-002', 'product_id' => 43, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'FANXIGMATEK-001', 'product_id' => 44, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'FANXIGMATEK-002', 'product_id' => 44, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'FANXIGMATEK-003', 'product_id' => 44, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'FANXIGMATEK-004', 'product_id' => 44, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'FANXIGMATEK-005', 'product_id' => 44, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'TANCLRML240-001', 'product_id' => 45, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'TANDEEP240-001', 'product_id' => 46, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'TANDEEP240-002', 'product_id' => 46, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'TANDEEP240-003', 'product_id' => 46, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'RAMPCKING16-001', 'product_id' => 47, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'RAMPCKING16-002', 'product_id' => 47, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'RAMPCADATA16-001', 'product_id' => 48, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'RAMPCKING8-001', 'product_id' => 49, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'RAMPCKING8-002', 'product_id' => 49, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'CASEXIGMATEK-001', 'product_id' => 50, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'CASEXIGMATEK-002', 'product_id' => 50, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'CASEDEEP110-001', 'product_id' => 51, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'CASEMSI320R-001', 'product_id' => 52, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PSUXIGMATEK650-001', 'product_id' => 53, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PSUXIGMATEK650-002', 'product_id' => 53, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PSUMSI650-001', 'product_id' => 54, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PSUMSI650-002', 'product_id' => 54, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PSUGIGABYTE650-001', 'product_id' => 55, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MBGIGABYTE760-001', 'product_id' => 56, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MBGIGABYTE760-002', 'product_id' => 56, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MBGIGABYTE760-003', 'product_id' => 56, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MBASUSTUF760-001', 'product_id' => 57, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MBASUSTUF760-002', 'product_id' => 57, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MBMSIPRO760-001', 'product_id' => 58, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MBMSIPRO760-002', 'product_id' => 58, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'VGAASUSRX6500-001', 'product_id' => 59, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'VGAMSIRTX3060-001', 'product_id' => 60, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'VGAMSIRTX3060-002', 'product_id' => 60, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'VGAMSIRTX3060-003', 'product_id' => 60, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'VGAMSIRTX3060-004', 'product_id' => 60, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'VGAGIGABYTERX6500-001', 'product_id' => 61, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'VGAGIGABYTERX6500-002', 'product_id' => 61, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'VGAGIGABYTERX6500-003', 'product_id' => 61, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'CPUI512400F-001', 'product_id' => 62, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'CPUI512400F-002', 'product_id' => 62, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'CPUI312100F-001', 'product_id' => 63, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'CPUI312100F-002', 'product_id' => 63, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'CPUAMD5500-001', 'product_id' => 64, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'KBDEDRA-001', 'product_id' => 65, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBDEDRA-002', 'product_id' => 65, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBDEDRA-003', 'product_id' => 65, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'KBDMSIFORCE-001', 'product_id' => 66, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBDMSIFORCE-002', 'product_id' => 66, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'KBDLOGITECHK120-001', 'product_id' => 67, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBDLOGITECHK120-002', 'product_id' => 67, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBDLOGITECHK120-003', 'product_id' => 67, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'KBDLOGITECHK120-004', 'product_id' => 67, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MOUSEMXANYWHERE-001', 'product_id' => 68, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MOUSEMXANYWHERE-002', 'product_id' => 68, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MOUSEMXANYWHERE-003', 'product_id' => 68, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MOUSEG102-001', 'product_id' => 69, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MOUSEG102-002', 'product_id' => 69, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MOUSEB100-001', 'product_id' => 70, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MOUSEB100-002', 'product_id' => 70, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MOUSEB100-003', 'product_id' => 70, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'WEBBRIO100-001', 'product_id' => 71, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'WEBRAPOOC270L-001', 'product_id' => 72, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'WEBRAPOOC270L-002', 'product_id' => 72, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'WEBRAPOOC280-001', 'product_id' => 73, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'WEBRAPOOC280-002', 'product_id' => 73, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'CAMERAEZVIZH6C-001', 'product_id' => 74, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'CAMERA365OC1-001', 'product_id' => 75, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'CAMERA365OC1-002', 'product_id' => 75, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'CAMERAEZVIZH6CPRO-001', 'product_id' => 76, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'NVRHIKVISION16-001', 'product_id' => 77, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'NVREZVIZ8-001', 'product_id' => 78, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'NVREZVIZ4-001', 'product_id' => 79, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'NVREZVIZ4-002', 'product_id' => 79, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'HDDWD6TB-001', 'product_id' => 80, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'HDDSEAGATE3TB-001', 'product_id' => 81, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'HDDSEAGATE3TB-002', 'product_id' => 81, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'SDCARDKING64-001', 'product_id' => 82, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SDCARDKING64-002', 'product_id' => 82, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SDCARDKING64-003', 'product_id' => 82, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SDCARDKING64-004', 'product_id' => 82, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PRINTERCANON6030-001', 'product_id' => 83, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PRINTERHP108W-001', 'product_id' => 84, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PRINTERHP108W-002', 'product_id' => 84, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PRINTERCANON243DW-001', 'product_id' => 85, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PRINTERCANON243DW-002', 'product_id' => 85, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PRINTERCANON243DW-003', 'product_id' => 85, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'PRINTERCANON243DW-004', 'product_id' => 85, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'PRINTERAPOS-001', 'product_id' => 86, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'TINGBOXQR-001', 'product_id' => 87, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'TINGBOXQR-002', 'product_id' => 87, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'MPOS-001', 'product_id' => 88, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'MPOS-002', 'product_id' => 88, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'WFASAX1800-001', 'product_id' => 92, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'WFASAX1800-002', 'product_id' => 92, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'WFASAX1800-003', 'product_id' => 92, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'TPLSG108E-001', 'product_id' => 93, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'TPLSG108E-002', 'product_id' => 93, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'TPLSG108E-003', 'product_id' => 93, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'UGR10950-001', 'product_id' => 94, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'UGR10950-002', 'product_id' => 94, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'UGR10950-003', 'product_id' => 94, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'RZRBSV2X-001', 'product_id' => 95, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'RZRBSV2X-002', 'product_id' => 95, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'RZRBSV2X-003', 'product_id' => 95, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'HYPXCIIIW-001', 'product_id' => 96, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'HYPXCIIIW-002', 'product_id' => 96, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'RZRBSV3P-001', 'product_id' => 97, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'THOVERV-001', 'product_id' => 98, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'THOVERV-002', 'product_id' => 98, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'THOVERV-003', 'product_id' => 98, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'EDIMR3-001', 'product_id' => 99, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'EDIMR3-002', 'product_id' => 99, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'EDIMR3-003', 'product_id' => 99, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'EDIMR3-004', 'product_id' => 99, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'EDIG1500-001', 'product_id' => 100, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'EDIG1500-002', 'product_id' => 100, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'EDIG1500-003', 'product_id' => 100, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'LEXD40064-001', 'product_id' => 101, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'LEXD40064-002', 'product_id' => 101, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'LEXD40064-003', 'product_id' => 101, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'LEXD40064-004', 'product_id' => 101, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'LEXD40064-005', 'product_id' => 101, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'WD6TBELM-001', 'product_id' => 102, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'WD6TBELM-002', 'product_id' => 102, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'UGR90264-001', 'product_id' => 103, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'UGR90264-002', 'product_id' => 103, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'UGR90264-003', 'product_id' => 103, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'SAND64U-001', 'product_id' => 104, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SAND64U-002', 'product_id' => 104, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SAND64U-003', 'product_id' => 104, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SAND64U-004', 'product_id' => 104, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SAND64U-005', 'product_id' => 104, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'HIKNEO64-001', 'product_id' => 105, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'HIKNEO64-002', 'product_id' => 105, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'HIKNEO64-003', 'product_id' => 105, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'HIKNEO64-004', 'product_id' => 105, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);

        ProductSerial::create(['serial_number' => 'SAMEVO64-001', 'product_id' => 106, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SAMEVO64-002', 'product_id' => 106, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SAMEVO64-003', 'product_id' => 106, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
        ProductSerial::create(['serial_number' => 'SAMEVO64-004', 'product_id' => 106, 'status' => 'in_stock', 'created_at' => now(), 'updated_at' => now()]);
    }
}
