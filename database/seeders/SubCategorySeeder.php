<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create(
            ['sub_categories_type'     => 'Agama',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Gender',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Geografi',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Iklim',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Indeks Pembangunan Manusia',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Kemiskinan',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Kependudukan',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Kesehatan',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Konsumsi dan Pengeluaran',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Pemerintahan',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Pendidikan',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Perumahan',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Tenaga Kerja',
             'id_categories'           => 1]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Ekspor - Impor',
             'id_categories'           => 2]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Energi',
             'id_categories'           => 2]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Industri',
             'id_categories'           => 2]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Inflasi',
             'id_categories'           => 2]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Keuangan',
             'id_categories'           => 2]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Komunikasi',
             'id_categories'           => 2]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Pariwisata',
             'id_categories'           => 2]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Produk Domestik Regional Bruto (Lapangan Usaha)',
             'id_categories'           => 2]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Produk Domestik Regional Bruto (Pengeluaran)',
             'id_categories'           => 2]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Transportasi',
             'id_categories'           => 2]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Hortikultura',
             'id_categories'           => 3]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Perikanan',
             'id_categories'           => 3]
        );
        
        SubCategory::create(
            ['sub_categories_type'     => 'Peternakan',
             'id_categories'           => 3]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Tanaman Pangan',
             'id_categories'           => 3]
        );

        SubCategory::create(
            ['sub_categories_type'     => 'Umum (lain-lain)',
             'id_categories'           => 4]
        );


    }
}
