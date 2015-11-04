<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->crearAdmin();
        $this->crearYo();
    }
    public function crearAdmin(){
        factory(App\User::class)->create([
            'id'    => '1',
            'name'  => 'admin',
            'email' => 'admin@sistema.com',
            'password'  => bcrypt('admin'),
        ]);
    }
    public function crearYo(){
        factory(App\User::class)->create([
            'id'    => '4821627',
            'name'  => 'behimar',
            'email' => 'behialvarado@gmail.com',
            'password'  => bcrypt('behimar'),
        ]);
    }
}
