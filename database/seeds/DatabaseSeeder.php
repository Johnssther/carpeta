<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class);
        $this->call(ModeloSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MarcaSeeder::class); 
        $this->call(ProductoSeeder::class);
        
    }
}
