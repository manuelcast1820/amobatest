<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Manuel',
                'email' => 'mcastellanotg@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JfPMLzCa4ATaMfoZRNb7le9C6kPvk92SmRPoIHrdd7WAMfnfYeu5G',
                'remember_token' => NULL,
                'created_at' => '2021-11-19 06:54:23',
                'updated_at' => '2021-11-19 06:54:23',
                'First_name' => NULL,
                'Last_name' => NULL,
                'Description' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'prueba nueva',
                'email' => 'prueba21@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ecugRIggWxbzLkZgMAm3y.SfqU9VINfi9rfuPOWVI9xnvImowY1hK',
                'remember_token' => NULL,
                'created_at' => '2021-11-19 15:35:51',
                'updated_at' => '2021-11-19 15:35:51',
                'First_name' => NULL,
                'Last_name' => NULL,
                'Description' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'prueba nueva',
                'email' => 'prueba@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7Twp5hDQ9FyC9oW4ej0IcuMyV2SY9HnswD/u5FLIio2zhLLlxcpaG',
                'remember_token' => NULL,
                'created_at' => '2021-11-19 15:39:38',
                'updated_at' => '2021-11-19 15:39:38',
                'First_name' => 'sdfsdf',
                'Last_name' => 'sdfsdf',
                'Description' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 23,
                'name' => 'Alejandro',
                'email' => 'alejandro@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NQwW2uu9QMyTRBEymxRLuuT3au4XTsQougM0.UUC4x4aCAr5jsA86',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 02:19:34',
                'updated_at' => '2021-11-20 05:13:55',
                'First_name' => 'Alejandro',
                'Last_name' => NULL,
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 24,
                'name' => 'Sebastian',
                'email' => 'sebas@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nSjT4rB2Qf4E8dVUTTDQ.uidxWwZ7FytHbYnmNwdDJwz/bFhjpal6',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 02:51:55',
                'updated_at' => '2021-11-20 06:51:08',
                'First_name' => 'Sebastian Josue',
                'Last_name' => NULL,
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cent',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 25,
                'name' => 'Manuel',
                'email' => 'man@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ivqawkXLop4Lgdb0kQ9hw.hkWdoaXhWUMcRK7uV.6asrz/TUaNGZq',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 03:05:27',
                'updated_at' => '2021-11-20 05:10:27',
                'First_name' => 'Manuel',
                'Last_name' => NULL,
            'Description' => 'the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 26,
                'name' => 'Victor',
                'email' => 'victor@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rdiGwgS.SsIXD1Uxgjq72.8XHBs6u0iGE/Gd8LpXI9AprpEmHTpta',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 03:07:49',
                'updated_at' => '2021-11-20 03:07:49',
                'First_name' => 'Victor',
                'Last_name' => NULL,
            'Description' => 'the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 27,
                'name' => 'Yuri',
                'email' => 'yuri@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kfH2.kxtm6d74Rr7Hi79u.FyHEuyV1jl2bdbtw95LrDoeTWgZwxYi',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 03:09:09',
                'updated_at' => '2021-11-20 03:09:09',
                'First_name' => 'Yuri',
                'Last_name' => NULL,
                'Description' => 'ure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum wh',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 28,
                'name' => 'Sofia',
                'email' => 'sofia@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$f0T/LaaKxVonNW3ukn28mej3FqzkpnC1jytuhRloNM4w6BEcgp3Gm',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 05:02:56',
                'updated_at' => '2021-11-20 05:02:56',
                'First_name' => 'Sofia',
                'Last_name' => NULL,
                'Description' => 'ard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 29,
                'name' => 'Nelvis',
                'email' => 'nelvis@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nVtE0zg9kG9lXw.VYNCn.OuC2Wz0Qs0624SUsjRsSJa2Je0JtDVwC',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 06:54:16',
                'updated_at' => '2021-11-20 06:54:55',
                'First_name' => 'Nelvis',
                'Last_name' => NULL,
                'Description' => 'nkdsfnj nkdfnsjnsdnf kjsdf sdf sdf sdf',
                'deleted_at' => '2021-11-20 06:54:55',
            ),
            10 => 
            array (
                'id' => 30,
                'name' => 'Marcos',
                'email' => 'marco@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cuepQEfoDWNuaD9QPhLJ5uCnYQ5ISDhZeD2k.XSIN8bc.Ay.OCLxu',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 13:37:52',
                'updated_at' => '2021-11-20 13:37:52',
                'First_name' => 'Marcos',
                'Last_name' => NULL,
                'Description' => 'plain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor ag',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 31,
                'name' => 'Andrea',
                'email' => 'andrea@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$m83FTOf.76f33TZ15dEi0.MzANoppIdrmFYy8ocG25gUZySwp4qXq',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 13:38:55',
                'updated_at' => '2021-11-20 13:38:55',
                'First_name' => 'Andrea',
                'Last_name' => NULL,
                'Description' => 'n and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untramme',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 32,
                'name' => 'Jose',
                'email' => 'jose@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RDONbNUupvO2hAdPwiMUl.tDmddlA7qLJ7GlFayYAieel1fkAuhYy',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 13:39:39',
                'updated_at' => '2021-11-20 13:39:39',
                'First_name' => 'Jose',
                'Last_name' => NULL,
                'Description' => 'best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occu',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 33,
                'name' => 'Angela',
                'email' => 'angela@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Mjvzmat5.DOP6qJf6teG9.BpDphahlU.OqLBVwcGuA/ocgiHSLWjG',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 13:42:30',
                'updated_at' => '2021-11-20 13:42:30',
                'First_name' => 'Angela',
                'Last_name' => NULL,
                'Description' => 'acere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis volupt',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 34,
                'name' => 'Alonso',
                'email' => 'alonso@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$s4RwZ1Vw3y0qtlvS.Yw0jOg.7rDboBT3uFgjG/oH7hJ9KDB8wwJh.',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 13:43:04',
                'updated_at' => '2021-11-20 13:43:04',
                'First_name' => 'Alonso',
                'Last_name' => NULL,
                'Description' => 'xercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying conseque',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 35,
                'name' => 'Andrea Sofia',
                'email' => 'ansof@algo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0udDqOIWKeIxUBRwnDink.nmwvkMrqkfEXawzrC9hskG3tHnrYKLe',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 13:44:11',
                'updated_at' => '2021-11-20 13:44:11',
                'First_name' => 'Andrea Sofia',
                'Last_name' => NULL,
                'Description' => 'ngs of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because t',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}