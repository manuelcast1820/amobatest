<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => '0a42698d88375aed1da7cf443cc3346699a1be6f521508e3d885f26d9fa3eef1d19905d276a626cb',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:39:38',
                'updated_at' => '2021-11-19 15:39:38',
                'expires_at' => '2022-11-19 15:39:38',
            ),
            1 => 
            array (
                'id' => '0c0c66cf613fc99b03eaaef567e7875376f74b3ed7640cd0d0488865fccf5d7e30914ee6afbadc18',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:41:34',
                'updated_at' => '2021-11-19 15:41:34',
                'expires_at' => '2022-11-19 15:41:34',
            ),
            2 => 
            array (
                'id' => '0f903b694e0f63aa879bec96f05521beb4ba74a5be86381b72f566ab49d1798207ff27896fa9b6ab',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:39:48',
                'updated_at' => '2021-11-19 15:39:48',
                'expires_at' => '2022-11-19 15:39:48',
            ),
            3 => 
            array (
                'id' => '17f6f010c5f276c9e89109b81db3b09f5eb8afee0bf8c5655628f98f70c9a99d1ac0c3647b4fed5d',
                'user_id' => 3,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:35:08',
                'updated_at' => '2021-11-19 15:35:08',
                'expires_at' => '2022-11-19 15:35:08',
            ),
            4 => 
            array (
                'id' => '18f2b290dce354c13c64e9f34ec280281814bf4bdb92c681ccf43a86f56be7d841fe3d8da58c68cf',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-20 04:01:09',
                'updated_at' => '2021-11-20 04:01:09',
                'expires_at' => '2022-11-20 04:01:09',
            ),
            5 => 
            array (
                'id' => '1d15977db6bdf1348af0a169b199c123831da12d78d37e4ce1714132a4b9944bcaf2f0975b07774c',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 1,
                'created_at' => '2021-11-19 20:40:15',
                'updated_at' => '2021-11-19 20:40:15',
                'expires_at' => '2022-11-19 20:40:15',
            ),
            6 => 
            array (
                'id' => '2d2ada9c9fbb1f1a99f63547795076b838fdd0dfb6d0530c6d986c7681f333ade24acf8477e2685f',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 1,
                'created_at' => '2021-11-19 16:00:15',
                'updated_at' => '2021-11-19 16:00:15',
                'expires_at' => '2022-11-19 16:00:15',
            ),
            7 => 
            array (
                'id' => '2e94b7e27e4aa7129f20527d9670ea25028f13f297ac008a8369c7c6b22e7ab82e8792d80721eccc',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:40:50',
                'updated_at' => '2021-11-19 15:40:50',
                'expires_at' => '2022-11-19 15:40:50',
            ),
            8 => 
            array (
                'id' => '2ea4ac180e74ee7d832c4c2dfae628d827e69a60636e6b9b3c22191ec029bf0ce05b758a0a47b763',
                'user_id' => 5,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:35:51',
                'updated_at' => '2021-11-19 15:35:51',
                'expires_at' => '2022-11-19 15:35:51',
            ),
            9 => 
            array (
                'id' => '302cbfec7c7d3208df981b086002b762477a589b69960779b5513e7307bb643c501a3d7cc9b9b984',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:41:54',
                'updated_at' => '2021-11-19 15:41:54',
                'expires_at' => '2022-11-19 15:41:54',
            ),
            10 => 
            array (
                'id' => '3054a7c2532ad5ef521425af46103a80d65c7aa887126b7bea994beda145ef8c40ed29fbc2856d45',
                'user_id' => 4,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:35:19',
                'updated_at' => '2021-11-19 15:35:19',
                'expires_at' => '2022-11-19 15:35:19',
            ),
            11 => 
            array (
                'id' => '367425a042949e48e95f0d933e21f494adcb57a18c39edea014d740a78bd6a316a7500abb6e20d1a',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:42:46',
                'updated_at' => '2021-11-19 15:42:46',
                'expires_at' => '2022-11-19 15:42:46',
            ),
            12 => 
            array (
                'id' => '369661143a8016df41df4a444e1873c835d5eae4e560acff4142ef0f676419fc607b8ea65d37fd43',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:57:41',
                'updated_at' => '2021-11-19 15:57:41',
                'expires_at' => '2022-11-19 15:57:41',
            ),
            13 => 
            array (
                'id' => '4d552ef1b3e9f5db32837e9f02bd023d8d2b73d900372d836db32f8c2fadaf3d32485a10ccee43fc',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 1,
                'created_at' => '2021-11-19 18:21:15',
                'updated_at' => '2021-11-19 18:21:15',
                'expires_at' => '2022-11-19 18:21:15',
            ),
            14 => 
            array (
                'id' => '5aff8a8aa7c8e57d5d4e3a9b44fe623e1af273972770d720111082b9843bf144116066079a0166e8',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 18:48:21',
                'updated_at' => '2021-11-19 18:48:21',
                'expires_at' => '2022-11-19 18:48:21',
            ),
            15 => 
            array (
                'id' => '9437d17177f84c644e191f8604f5093ff1e941ffa9cd136cfa92d935f5ab7be7c3947cbf2dfb7d03',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 1,
                'created_at' => '2021-11-19 20:29:41',
                'updated_at' => '2021-11-19 20:29:41',
                'expires_at' => '2022-11-19 20:29:41',
            ),
            16 => 
            array (
                'id' => '9a71a3d060227eb5e0e9d115027ffc4a6c898add486ebf618830604cd82c2faef6bcec6bbc346d81',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 20:29:42',
                'updated_at' => '2021-11-19 20:29:42',
                'expires_at' => '2022-11-19 20:29:42',
            ),
            17 => 
            array (
                'id' => 'a09aba1ba3ba63264215758123e6428db99d3bfa54ab514e507161d3afe3346920ecf69c75cefd93',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 06:54:32',
                'updated_at' => '2021-11-19 06:54:32',
                'expires_at' => '2022-11-19 06:54:32',
            ),
            18 => 
            array (
                'id' => 'a7ff4f1307d360602d9756ea4f9568616ec969373c6079ec3c06b871e15f09d4707ccd02c7dc77c2',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:59:35',
                'updated_at' => '2021-11-19 15:59:35',
                'expires_at' => '2022-11-19 15:59:35',
            ),
            19 => 
            array (
                'id' => 'b05d95f1b7724ac42d879dbd2f64d94b65524e8f8c79f41376ad1f5194c471d7da8c1f15bd491855',
                'user_id' => 2,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:32:36',
                'updated_at' => '2021-11-19 15:32:36',
                'expires_at' => '2022-11-19 15:32:36',
            ),
            20 => 
            array (
                'id' => 'b645b76732fcd41cbec962f81147d570cd4d2422174e2b457aa8ce0ccb7c17b7c753e60b4a0067f7',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 1,
                'created_at' => '2021-11-19 23:35:16',
                'updated_at' => '2021-11-19 23:35:16',
                'expires_at' => '2022-11-19 23:35:16',
            ),
            21 => 
            array (
                'id' => 'b8f1df8f1d91ead32257525c1e2799db4577c775918ff2a2f79ae616bfa32d1dffeff523703a82c0',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 1,
                'created_at' => '2021-11-19 19:19:00',
                'updated_at' => '2021-11-19 19:19:00',
                'expires_at' => '2022-11-19 19:19:00',
            ),
            22 => 
            array (
                'id' => 'd3f84ff1f8a8617542dce835904038a8c1dcd7f5893f230fbaa8d4c5718554b92c5057fc6f003f84',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 15:40:32',
                'updated_at' => '2021-11-19 15:40:32',
                'expires_at' => '2022-11-19 15:40:32',
            ),
            23 => 
            array (
                'id' => 'd8c08a714d2667ee3378d9d47ec72b96db9e2f15cde6d1d9d34099e821f25e117f6b9558ba242a18',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 1,
                'created_at' => '2021-11-19 18:34:54',
                'updated_at' => '2021-11-19 18:34:54',
                'expires_at' => '2022-11-19 18:34:54',
            ),
            24 => 
            array (
                'id' => 'd96546e83a0df2324bbadfd185cad2b217bbf1fd664dc4cace4305945f884e7598ff1eea1d9a7e9f',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 1,
                'created_at' => '2021-11-19 19:24:16',
                'updated_at' => '2021-11-19 19:24:16',
                'expires_at' => '2022-11-19 19:24:16',
            ),
            25 => 
            array (
                'id' => 'f4b5bff4395879476f1bc11cbd2645821365a7614a181fa2131a85b2b8ef4d1879e43441524b7962',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 07:06:34',
                'updated_at' => '2021-11-19 07:06:34',
                'expires_at' => '2022-11-19 07:06:34',
            ),
            26 => 
            array (
                'id' => 'f895140aef40c2987bef8e9e7e477c70648b908e8a22975ff9b0a6745681712dcdc8264db15b6fc4',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-19 19:11:15',
                'updated_at' => '2021-11-19 19:11:15',
                'expires_at' => '2022-11-19 19:11:15',
            ),
        ));
        
        
    }
}