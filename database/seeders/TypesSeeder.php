<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Types;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['eCommerce','Magazine','Blog','Portal'];

        foreach($categories as $category){
            $type = new Types();

            $type->category= $category;
           
            DB::table('types')->insert([
                'category'=>$category,
                'mobile'=>false,
                'tablet'=>false,
                'pc'=>false,
                'smart_tv'=>false,
                'windows'=>false,
                'linux'=>false,
                'mac'=>false,
                'android'=>false,
                'ios'=>false,
                'age_restriction'=>false,
            ]);
        }
    }
}
