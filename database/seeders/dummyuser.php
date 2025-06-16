<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dummyuser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
                'email'=>'a@gmail.com',
                'nama'=>'a',
                'nim'=>'2',
                'jurusan'=>'p',
                'password'=>'2',
                'role'=>'admin',
            ],
            [
                'email'=>'i@gmail.com',
                'nama'=>'i',
                'nim'=>'5',
                'jurusan'=>'RPL',
                'password'=>'3',
                'role'=>'mahasiswa',
            ],
            [
                'email'=>'ahmad@gmail.com',
                'nama'=>'ahmad',
                'nim'=>'123',
                'jurusan'=>'dkv',
                'password'=>'123',
                'role'=>'mahasiswa',
            ],
        ];

        foreach($userdata as $key => $val){
            User::create($val);
        }
    }
}
