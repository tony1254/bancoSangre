<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\CRol;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	   //  Model::unguard();

        // $this->call(UserTableSeeder::class);
        // $this->call(CRolTableSeeder::class);
        //     Model::reguard();

  // TestDummy::times(20)->create('App\Post');
          DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'lgarcia-1254@outlook.com',
            'cui' => 2145800082214,
            'rol' => 1,
            'password' => bcrypt('123456')
        ]);
         DB::table('c_rols')->insert(['nombre' => 'Administrador']);
         DB::table('c_rols')->insert(['nombre' => 'Encargado']);
         DB::table('c_rols')->insert(['nombre' => 'Usuario']);
         DB::table('c_sexo')->insert(['nombre' => 'Hombre']);
         DB::table('c_sexo')->insert(['nombre' => 'Mujer']);
         DB::table('persona')->insert(['cui' => '2145800082214','nombre' => 'Luis Antonio','apellido' => 'Garcia Aguirre','sexo' => '1']);
    }
}
