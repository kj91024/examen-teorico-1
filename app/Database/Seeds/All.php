<?php

namespace App\Database\Seeds;

use App\Services\EmpresaService;
use App\Services\SedeService;
use CodeIgniter\Database\Seeder;

class All extends Seeder
{
    public function run()
    {
        $es = new EmpresaService();
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'nombre' => "empresa $i",
                'ruc' => "empresa $i",
                'razon_social' => "Nombre empresa $i",
                'direccion' => "dirección $i"
            ];
            $es->create($data);
        }

        $ss = new SedeService();
        for ($i = 0; $i < 10; $i++) {}

    }
}
