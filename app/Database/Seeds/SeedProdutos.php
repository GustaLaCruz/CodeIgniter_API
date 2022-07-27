<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedProdutos extends Seeder
{
    public function run()
    {
        $data = [
            'descricao' => 'Computador',
            'valor'    => 3400,
        ];

        $this->db->table('tb_produtos')->insert($data);
    }
}