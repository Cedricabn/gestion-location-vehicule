<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Administrateur',
            'email' => 'admin@example.com',
            'password' => Hash::make('motdepasse'),
            'administrateur'=> 1
        ]);
       
                DB::table("clients")->insert([
                    ["id"=>"2","fullname"=>"ABIONAN Cédric","telephone"=>"97605478","email"=> "low@gmail.com", "user_id"=>"4"],
                        ]);
                        DB::table("vehicules")->insert([
                            ["id"=>"1","nom"=>"Hybrid DCT-6 Business","marque"=> "Hyundai", "description"=>"Facile à conduire,consommation raisonnable,silencieuse,confortable","prix"=>"20000","image"=>"img/anim1.jpg"],
                            ["id"=>"2","nom"=>"DI-D Invite 4WD","marque"=> "Outlander", "description"=>"Facile à conduire,un peu vieillissant,prix abordable, confortable","prix"=>"15000","image"=>"img/anim2.jpg"],                       
                                 ["id"=>"3","nom"=>"e-HDI 115","marque"=> "Citroen", "description"=>"Facile à conduire,peut être amené sur n'importe quel terrain,prix abordable, confortable","prix"=>"25000","image"=>"img/anim3.jpg"],

                                ]);
    }
}
