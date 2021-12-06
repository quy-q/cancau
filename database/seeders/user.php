<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('users')->insert([
                ['FullName'=>'Quý','UserName'=>'Nguyễn Đình Quý','Email'=>'nguyenquy290500@gmail.com','Password'=>'123456','remember_token'=>'asd'],
                ['FullName'=>'Nam','UserName'=>'Nguyễn Đình Nam','Email'=>'nguyenquy290501@gmail.com','Password'=>'123456','remember_token'=>'asdd'],
                ['FullName'=>'Đại','UserName'=>'Nguyễn Đình Đại','Email'=>'nguyenquy290502@gmail.com','Password'=>'123456','remember_token'=>'asdd'],
            ]);
        }
    }
}
