<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class roder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('order')->insert([
            ['UrlP' => '','NameP'=>'Hỏa Long','Price'=>10000,'Des'=>'adasdlasjdlkaslkasdsa','IP'=>'hl','AnHien'=>1,'idc'=>1],
            ['UrlP' => '','NameP'=>'Hỏa Long2','Price'=>100,'Des'=>'adasdlasjdlkaslkasdsa','IP'=>'hl','AnHien'=>1,'idc'=>2],
            ['UrlP' => '','NameP'=>'Hỏa Long3','Price'=>100,'Des'=>'adasdlasjdlkaslkasdsa','IP'=>'hl','AnHien'=>1,'idc'=>1],
        ]);
    }
}
