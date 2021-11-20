<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'Laravel Personal Access Client',
                'secret' => 'lEWaQsmMKYRoJa7omYgzXng6qAJG3fEszOrD45PB',
                'provider' => NULL,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2021-11-19 06:41:08',
                'updated_at' => '2021-11-19 06:41:08',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'Laravel Password Grant Client',
                'secret' => 'i2GRwBEGe0bmNrEL8ttpvqTRwNxoIplikTw1ScXv',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2021-11-19 06:41:08',
                'updated_at' => '2021-11-19 06:41:08',
            ),
        ));
        
        
    }
}