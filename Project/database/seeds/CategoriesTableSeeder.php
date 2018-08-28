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
                'description'=>'Trình độ gà con bị bắt nạt',
                'thumbnail'=>'http://news.cdn.leagueoflegends.com/public/images/misc/Background.jpg'
            ],
            [
                'id'=>5,
                'parentId'=>1,
                'name'=>'Liên minh huyền thoại Bạc đoàn',
                'description'=>'Trình độ lính mới tò te',
                'thumbnail'=>'http://news.cdn.leagueoflegends.com/public/images/misc/Background.jpg'
            ],
            [
                'id'=>6,
                'parentId'=>1,
                'name'=>'Liên minh huyền thoại Bạch kim đoàn',
                'description'=>'Trình độ chơi game thời gian dài',
                'thumbnail'=>'http://news.cdn.leagueoflegends.com/public/images/misc/Background.jpg'
            ],
            [
                'id'=>7,
                'parentId'=>2,
                'name'=>'PUBG Account',
                'description'=>'Tài khoản steam đã kích hoạt game PUBG',
                'thumbnail'=>'https://steamuserimages-a.akamaihd.net/ugc/931554217225615451/A0282B56D929E82A7F511E134C67815E8C7F6C56/?interpolation=lanczos-none&output-format=jpeg&output-quality=95&fit=inside%7C637%3A358&composite-to=*,*%7C637%3A358&background-color=black'
            ],
            [
                'id'=>8,
                'parentId'=>3,
                'name'=>'CSGO Silver',
                'description'=>'Rank mới tập cầm súng',
                'thumbnail'=>'https://csgoallrankstore.com/wp-content/uploads/2017/09/s1-2.png'
            ],
            [
                'id'=>9,
                'parentId'=>3,
                'name'=>'CSGO Nova',
                'description'=>'Rank biết bắn súng phun nước',
                'thumbnail'=>'https://csgoallrankstore.com/wp-content/uploads/2017/09/gn4-2-247x247.png'
            ],
            [
                'id'=>10,
                'parentId'=>3,
                'name'=>'CSGO Master Guardian',
                'description'=>'Rank bắt nạt được bot',
                'thumbnail'=>'https://csgoallrankstore.com/wp-content/uploads/2017/09/gn4-2-247x247.png'
            ],
            [
                'id'=>11,
                'parentId'=>3,
                'name'=>'CSGO Legendary Eagle',
                'description'=>'Rank cao thủ đi săn chim',
                'thumbnail'=>'https://csgoallrankstore.com/wp-content/uploads/2017/09/lem-2-247x247.png'
            ],
            [
                'id'=>12,
                'parentId'=>3,
                'name'=>'CSGO Supreme Master',
                'description'=>'Gosu top đầu của game',
                'thumbnail'=>'https://csgoallrankstore.com/wp-content/uploads/2017/09/smfc-2-247x247.png'
            ],
            [
                'id'=>13,
                'parentId'=>3,
                'name'=>'CSGO Global Elite',
                'description'=>'Còn chờ gì nữa mà không go pro hả giáo sư',
                'thumbnail'=>'https://csgoallrankstore.com/wp-content/uploads/2017/09/ge-2-247x247.png  '
            ],
            [
                'id'=>14,
                'parentId'=>null,
                'name'=>'Minecraft',
                'description'=>'Game dành cho con nít',
                'thumbnail'=>'http://www.qygjxz.com/data/out/158/5223386-minecraft-wallpaper.jpg'
            ],
        ]);
    }
}
