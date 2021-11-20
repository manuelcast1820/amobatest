<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profiles')->delete();
        
        \DB::table('profiles')->insert(array (
            0 => 
            array (
                'id' => 16,
                'User_id' => 23,
                'Ima_profile' => '16doctor4.jpeg',
                'created_at' => '2021-11-14 02:19:34',
                'updated_at' => '2021-11-20 05:13:55',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 17,
                'User_id' => 24,
                'Ima_profile' => '17doctor6.jpeg',
                'created_at' => '2021-11-15 02:51:55',
                'updated_at' => '2021-11-20 05:09:32',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 18,
                'User_id' => 25,
                'Ima_profile' => '18doctor1.jpeg',
                'created_at' => '2021-11-16 03:05:27',
                'updated_at' => '2021-11-20 05:10:27',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 19,
                'User_id' => 26,
                'Ima_profile' => '19perfil linkeind.jpeg',
                'created_at' => '2021-11-17 03:07:49',
                'updated_at' => '2021-11-20 03:07:49',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 20,
                'User_id' => 27,
                'Ima_profile' => '20doctor3.jpeg',
                'created_at' => '2021-11-18 03:09:09',
                'updated_at' => '2021-11-20 03:09:09',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 21,
                'User_id' => 28,
                'Ima_profile' => '21Camila Mac Lennan.jpeg',
                'created_at' => '2021-11-19 05:02:56',
                'updated_at' => '2021-11-20 05:02:56',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 22,
                'User_id' => 29,
                'Ima_profile' => 'default',
                'created_at' => '2021-11-20 06:54:16',
                'updated_at' => '2021-11-20 06:54:55',
                'deleted_at' => '2021-11-20 06:54:55',
            ),
            7 => 
            array (
                'id' => 23,
                'User_id' => 30,
                'Ima_profile' => '23profielas 1231.jpg',
                'created_at' => '2021-11-20 13:37:52',
                'updated_at' => '2021-11-20 13:37:52',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 24,
                'User_id' => 31,
                'Ima_profile' => '24profile4.jpg',
                'created_at' => '2021-11-20 13:38:55',
                'updated_at' => '2021-11-20 13:38:55',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 25,
                'User_id' => 32,
                'Ima_profile' => '25profils as.jpeg',
                'created_at' => '2021-11-20 13:39:39',
                'updated_at' => '2021-11-20 13:39:39',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 26,
                'User_id' => 33,
                'Ima_profile' => '26profile5555.jpeg',
                'created_at' => '2021-11-20 13:42:30',
                'updated_at' => '2021-11-20 13:42:30',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 27,
                'User_id' => 34,
                'Ima_profile' => '27profile32234.jpeg',
                'created_at' => '2021-11-20 13:43:04',
                'updated_at' => '2021-11-20 13:43:04',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 28,
                'User_id' => 35,
                'Ima_profile' => '28profile 1232.jpg',
                'created_at' => '2021-11-20 13:44:11',
                'updated_at' => '2021-11-20 13:44:11',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}