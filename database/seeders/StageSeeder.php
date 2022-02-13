<?php

namespace Database\Seeders;

use App\Models\stage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stages')->insert(
          [
              ['name' => 'Формируется'],
              ['name' => 'Проверятестя специолистом ремонтной службы'],
              ['name' => 'Заявка откланена специалистом ремонтной службы'],
              ['name' => 'В процессе предварительного оценивания стоимости'],
              ['name' => 'Заявка расценина. Ожидается окончательное подтверждение потребности начальником цеха'],
              ['name' => 'Заявка откланена начальником цеха'],
              ['name' => 'Потребность подтверждена начальником цеха'],
              ['name' => 'Создана спецификация на закупку комплектующих'],
          ]
        );
    }
}
