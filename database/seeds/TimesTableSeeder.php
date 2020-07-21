<?php

use Illuminate\Database\Seeder;
use App\Models\Time;
class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time1 = new Time;
        $time1->duration = 5;
        $time1->frequency = 10;
        $time1->save();
    }
}
