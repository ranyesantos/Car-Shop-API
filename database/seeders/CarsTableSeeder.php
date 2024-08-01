<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $cars = [
            ['id' => 1, 'brand' => 'Chevrolet', 'model' => 'Onix', 'value' => 70000, 'license' => 'ABC1D23', 'color' => 'Prata'],
            ['id' => 2, 'brand' => 'Chevrolet', 'model' => 'Onix', 'value' => 71000, 'license' => 'BCD2E34', 'color' => 'Prata'],
            ['id' => 3, 'brand' => 'Hyundai', 'model' => 'HB20', 'value' => 65000, 'license' => 'DEF4G56', 'color' => 'Branco'],
            ['id' => 4, 'brand' => 'Hyundai', 'model' => 'HB20', 'value' => 66000, 'license' => 'EFG5H67', 'color' => 'Prata'],
            ['id' => 5, 'brand' => 'Fiat', 'model' => 'Argo', 'value' => 68000, 'license' => 'GHI7H89', 'color' => 'Preto'],
            ['id' => 6, 'brand' => 'Fiat', 'model' => 'Argo', 'value' => 69000, 'license' => 'HIJ8I90', 'color' => 'Vermelho'],
            ['id' => 7, 'brand' => 'Volkswagen', 'model' => 'Gol', 'value' => 64000, 'license' => 'JKL0M12', 'color' => 'Vermelho'],
            ['id' => 8, 'brand' => 'Volkswagen', 'model' => 'Gol', 'value' => 65000, 'license' => 'JKM1N23', 'color' => 'Azul'],
            ['id' => 9, 'brand' => 'Jeep', 'model' => 'Renegade', 'value' => 115000, 'license' => 'MNO3P45', 'color' => 'Azul'],
            ['id' => 10, 'brand' => 'Jeep', 'model' => 'Renegade', 'value' => 116000, 'license' => 'NOP4Q56', 'color' => 'Preto'],
            ['id' => 11, 'brand' => 'Chevrolet', 'model' => 'Tracker', 'value' => 95000, 'license' => 'PQR6S78', 'color' => 'Cinza'],
            ['id' => 12, 'brand' => 'Chevrolet', 'model' => 'Tracker', 'value' => 96000, 'license' => 'QRS7T89', 'color' => 'Bege'],
            ['id' => 13, 'brand' => 'Volkswagen', 'model' => 'T-Cross', 'value' => 105000, 'license' => 'STU9V01', 'color' => 'Bege'],
            ['id' => 14, 'brand' => 'Volkswagen', 'model' => 'T-Cross', 'value' => 106000, 'license' => 'TUV0W12', 'color' => 'Prata'],
            ['id' => 15, 'brand' => 'Fiat', 'model' => 'Mobi', 'value' => 55000, 'license' => 'VWX2Y34', 'color' => 'Amarelo'],
            ['id' => 16, 'brand' => 'Fiat', 'model' => 'Mobi', 'value' => 56000, 'license' => 'WXY3Z45', 'color' => 'Azul'],
            ['id' => 17, 'brand' => 'Toyota', 'model' => 'Corolla', 'value' => 130000, 'license' => 'YZA5B67', 'color' => 'Prata'],
            ['id' => 18, 'brand' => 'Toyota', 'model' => 'Corolla', 'value' => 132000, 'license' => 'YZA6C78', 'color' => 'Branco'],
            ['id' => 19, 'brand' => 'Nissan', 'model' => 'Kicks', 'value' => 100000, 'license' => 'BCD8C90', 'color' => 'Verde'],
            ['id' => 20, 'brand' => 'Nissan', 'model' => 'Kicks', 'value' => 102000, 'license' => 'CDE9D01', 'color' => 'Prata'],
            ['id' => 21, 'brand' => 'Renault', 'model' => 'Kwid', 'value' => 54000, 'license' => 'EFG1D23', 'color' => 'Laranja'],
            ['id' => 22, 'brand' => 'Renault', 'model' => 'Kwid', 'value' => 55000, 'license' => 'FGH2E34', 'color' => 'Vermelho'],
            ['id' => 23, 'brand' => 'Honda', 'model' => 'HR-V', 'value' => 120000, 'license' => 'HIJ4K56', 'color' => 'Branco'],
            ['id' => 24, 'brand' => 'Honda', 'model' => 'HR-V', 'value' => 122000, 'license' => 'HIJ5L67', 'color' => 'Cinza'],
            ['id' => 25, 'brand' => 'Fiat', 'model' => 'Cronos', 'value' => 75000, 'license' => 'JKL7L89', 'color' => 'Azul'],
            ['id' => 26, 'brand' => 'Fiat', 'model' => 'Cronos', 'value' => 76000, 'license' => 'JKL8M90', 'color' => 'Preto'],
            ['id' => 27, 'brand' => 'Ford', 'model' => 'Ka', 'value' => 61000, 'license' => 'MNO0M12', 'color' => 'Cinza'],
            ['id' => 28, 'brand' => 'Ford', 'model' => 'Ka', 'value' => 62000, 'license' => 'NOP1N23', 'color' => 'Branco']


        ];

        DB::table('cars')->insert($cars);
    }
}
