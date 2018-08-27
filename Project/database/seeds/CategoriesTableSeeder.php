<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'id'=>1,
                'parentId'=>null,
                'name'=>'Liên minh huyền thoại',
                'description'=>'Game đang hot trong giới trẻ',
                'thumbnail'=>'http://news.cdn.leagueoflegends.com/public/images/misc/Background.jpg'
            ],
            [
                'id'=>2,
                'parentId'=>null,
                'name'=>'PUBG',
                'description'=>'Game đang hấp hối',
                'thumbnail'=>'https://cdn57.androidauthority.net/wp-content/uploads/2018/04/Screenshot_2018-04-09-14-57-38-840x420.jpg'
            ],
            [
                'id'=>3,
                'parentId'=>null,
                'name'=>'CSGO',
                'description'=>'Daed game',
                'thumbnail'=>'http://media.steampowered.com/apps/csgo/blog/images/fb_image.png?v=5'
            ],
            [
                'id'=>4,
                'parentId'=>1,
                'name'=>'Liên minh huyền thoại Đồng đoàn',
                'description'=>'Game đang hot trong giới trẻ',
                'thumbnail'=>'http://news.cdn.leagueoflegends.com/public/images/misc/Background.jpg'
            ],

        ]);
    }
}
