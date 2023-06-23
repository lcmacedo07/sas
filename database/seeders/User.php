<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class User extends Seeder
{
    public function run()
    {
        if (DB::table('users')->get()->count() == 0) {
            DB::table('users')->insert([
                [
                    'uuid' => Str::uuid(),
                    'email' => 'lcmacedo07@gmail.com',
                    'password' => (new BcryptHasher)->make("123456"),
                    'fullname' => 'Leandro Macedo',
                    'genre' => 'M',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'uuid' => Str::uuid(),
                    'email' => 'super-admin@gestaobytes.com',
                    'password' => (new BcryptHasher)->make("123456"),
                    'fullname' => 'SuperAdmin Sistema',
                    'genre' => 'M',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
            ]);
        } else {
            echo "\e[31m Users nao e uma tabela vazia. Nao foi efetuado o Seed.";
        }
    }
}