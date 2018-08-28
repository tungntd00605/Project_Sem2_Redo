<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'name'=> '#1',
                'categoryId'=>4,
                'thumbnails'=>'http://news.cdn.leagueoflegends.com/public/images/misc/Background.jpg',
                'price'=>20000,
                'description'=>'Nick đồng đoàn',
                'detail'=>'Full tướng ko skin',
            ],
        ]);
    }
}
