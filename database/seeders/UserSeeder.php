<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = new User();
        $user-> name ='Luis Cupul';
        $user-> email ='21890234@ittizimin.edu.mx';
        $user-> password = bcrypt(12345678);
        $user->save();

        $user = new User();
        $user-> name ='Mario Hau';
        $user-> email ='21890235@ittizimin.edu.mx';
        $user-> password = bcrypt(123456789);
        $user->save();
    }
}
