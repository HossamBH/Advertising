<?php

use Illuminate\Database\Seeder;
use App\Models\Ad;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ad1 = new Ad;
        $ad1->title = "T-shirts";
        $ad1->description = "New Collections of T-shirts";
        $ad1->image = "/uploads/ad/1595354460T.jpg";
        $ad1->from = "2020-07-22";
        $ad1->to = "2020-07-23";
        $ad1->save();
    }
}
