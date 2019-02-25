<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
          factory(App\Models\Usuario::class, 50)->create()->each(function ($u) {
            $u->save();
        });  
 
        
    }
}
