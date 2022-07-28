<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['name'=>'Oppo mobile',
            'price'=>'300',
            'description'=>'A smartfhone 4GB ram and much more feature',
            'category'=>'tv',
            'gallery'=>'https://cdn.vox-cdn.com/thumbor/NFSWKNUbgT3-Pw3jZU2Ur_4aEuw=/0x0:1306x734/2070x1164/filters:focal(549x263:757x471):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/68490964/Best_Phone_Grid_Fall_2021_16x9.10.jpg',
            ],
            ['name'=>'G mobile',
            'price'=>'500',
            'description'=>'A smartfhone 4GB ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'https://cdn.vox-cdn.com/thumbor/NFSWKNUbgT3-Pw3jZU2Ur_4aEuw=/0x0:1306x734/2070x1164/filters:focal(549x263:757x471):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/68490964/Best_Phone_Grid_Fall_2021_16x9.10.jpg',
            ],
            ['name'=>'Iphone mobile',
            'price'=>'900',
            'description'=>'A smartfhone 4GB ram and much more feature',
            'category'=>'fridge',
            'gallery'=>'https://cdn.vox-cdn.com/thumbor/NFSWKNUbgT3-Pw3jZU2Ur_4aEuw=/0x0:1306x734/2070x1164/filters:focal(549x263:757x471):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/68490964/Best_Phone_Grid_Fall_2021_16x9.10.jpg',
            ],
            ['name'=>'Samsung mobile',
            'price'=>'1000',
            'description'=>'A smartfhone 4GB ram and much more feature',
            'category'=>'tv',
            'gallery'=>'https://cdn.vox-cdn.com/thumbor/NFSWKNUbgT3-Pw3jZU2Ur_4aEuw=/0x0:1306x734/2070x1164/filters:focal(549x263:757x471):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/68490964/Best_Phone_Grid_Fall_2021_16x9.10.jpg',
            ],
        ]);
    }
}
