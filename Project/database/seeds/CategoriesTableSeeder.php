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
            [
                'id'=>5,
                'parentId'=>1,
                'name'=>'Liên minh huyền thoại Bạc đoàn',
                'description'=>'Game đang hot trong giới trẻ',
                'thumbnail'=>'http://news.cdn.leagueoflegends.com/public/images/misc/Background.jpg'
            ],
            [
                'id'=>6,
                'parentId'=>1,
                'name'=>'Liên minh huyền thoại Bạch kim đoàn',
                'description'=>'Game đang hot trong giới trẻ',
                'thumbnail'=>'http://news.cdn.leagueoflegends.com/public/images/misc/Background.jpg'
            ],
            [
                'id'=>7,
                'parentId'=>2,
                'name'=>'PUBG Đồng đoàn',
                'description'=>'Game đang hấp hối',
                'thumbnail'=>'https://steamuserimages-a.akamaihd.net/ugc/931554217225615451/A0282B56D929E82A7F511E134C67815E8C7F6C56/?interpolation=lanczos-none&output-format=jpeg&output-quality=95&fit=inside%7C637%3A358&composite-to=*,*%7C637%3A358&background-color=black'
            ],
            [
                'id'=>8,
                'parentId'=>2,
                'name'=>'PUBG Bạc đoàn',
                'description'=>'Game đang hấp hối',
                'thumbnail'=>'https://steamuserimages-a.akamaihd.net/ugc/931554217225615451/A0282B56D929E82A7F511E134C67815E8C7F6C56/?interpolation=lanczos-none&output-format=jpeg&output-quality=95&fit=inside%7C637%3A358&composite-to=*,*%7C637%3A358&background-color=black'
            ],
            [
                'id'=>9,
                'parentId'=>2,
                'name'=>'PUBG Vàng đoàn',
                'description'=>'Game đang hấp hối',
                'thumbnail'=>'https://steamuserimages-a.akamaihd.net/ugc/931554217225615451/A0282B56D929E82A7F511E134C67815E8C7F6C56/?interpolation=lanczos-none&output-format=jpeg&output-quality=95&fit=inside%7C637%3A358&composite-to=*,*%7C637%3A358&background-color=black'
            ],
            [
                'id'=>10,
                'parentId'=>3,
                'name'=>'CSGO Đồng đoàn',
                'description'=>'Daed game',
                'thumbnail'=>'https://vignette.wikia.nocookie.net/counterstrike/images/2/2f/Steam_Store_Global_Offensive_header_2015.jpg/revision/latest?cb=20150511180147&path-prefix=tr'
            ],
            [
                'id'=>11,
                'parentId'=>3,
                'name'=>'CSGO Bạc đoàn',
                'description'=>'Daed game',
                'thumbnail'=>'https://vignette.wikia.nocookie.net/counterstrike/images/2/2f/Steam_Store_Global_Offensive_header_2015.jpg/revision/latest?cb=20150511180147&path-prefix=tr'
            ],
            [
                'id'=>12,
                'parentId'=>3,
                'name'=>'CSGO Vàng đoàn',
                'description'=>'Daed game',
                'thumbnail'=>'https://vignette.wikia.nocookie.net/counterstrike/images/2/2f/Steam_Store_Global_Offensive_header_2015.jpg/revision/latest?cb=20150511180147&path-prefix=tr'
            ],
        ]);
    }
}
