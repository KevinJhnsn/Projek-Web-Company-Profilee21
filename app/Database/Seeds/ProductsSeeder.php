<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'Batik Tulis Premium',
                'description' => 'Batik tulis kualitas tinggi dengan motif eksklusif.',
                'price'       => 750000,
            ],
            [
                'name'        => 'Batik Cap Modern',
                'description' => 'Batik cap dengan desain modern dan stylish.',
                'price'       => 250000,
            ],
        ];

        // Insert multiple rows
        $this->db->table('products')->insertBatch($data);
    }
}
    