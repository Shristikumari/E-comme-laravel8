<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['name'=>"mobile",
            'price'=>"200",
            'description'=>'hi',
            'category'=>'electronic',
            'gallery'=>'https://ceblog.s3.amazonaws.com/wp-content/uploads/2018/03/01113506/image48.jpg'
        ],
            [
                'name'=>"mobile2",
                'price'=>"210",
                'description'=>'hi',
                'category'=>'electronic_p',
                'gallery'=>'https://image.shutterstock.com/image-vector/modern-flat-design-vector-illustration-600w-1904541430.jpg'
            ],
                ['name'=>"mobile3",
                    'price'=>"220",
                    'description'=>'hi',
                    'category'=>'electronic_d',
                    'gallery'=>'https://image.shutterstock.com/image-illustration/digital-generated-devices-on-desktop-600w-1495869476.jpg'
        ]
            
        ]);

    }
}
