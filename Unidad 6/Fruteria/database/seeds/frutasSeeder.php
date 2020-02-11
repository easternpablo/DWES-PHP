<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutasSeeder extends Seeder
{

    public function run()
    {
        for($i=0;$i<=50;$i++){
            DB::table('frutas')->insert([
                'name' => 'Manzana'.$i,
                'description' => 'Esto es una fruta muy rica'.$i,
                'precio' => $i,
                'fecha' => date('Y-m-d')
            ]);
        }
        $this->command->info('La tabla ha sido rellenada');
    }
}
