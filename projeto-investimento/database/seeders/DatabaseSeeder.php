<?php

namespace Database\Seeders;

use App\Entities\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf' => '05465485800',
            'name' => 'Fernando Nogueira',
            'phone' => '62985653636',
            'birth' => '1985-05-26',
            'gender' => 'M',
            'email' => 'fernandonogueira@sistema.com',
            'password' => bcrypt('123456'),
        ]);
        // \App\Models\User::factory(10)->create();

    }
}
