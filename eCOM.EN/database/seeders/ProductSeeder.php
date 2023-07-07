<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                "name"=>"Oppo mobile",
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbRlFaxWjI8dCECfbhtjoTIXaReYV3vAXdbQ&usqp=CAU"
            ],
            [
                "name"=>"Apple mobile",
                "price"=>"1200",
                "description"=>"A smartphone with 12gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj3PW0E0pTFZZ5nsEVSM88dU1WqgylaD-47TXvW5inERgFF9GqSdw8u_OzcaBdrbvcP64&usqp=CAU"
            ],
            [
                "name"=>"Redmi mobile",
                "price"=>"600",
                "description"=>"A smartphone with 6gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr4bVZzQRL08No-39HmrMKoK3zYh4i4gG30Q&usqp=CAU"
            ],
            [
                "name"=>"Vivo mobile",
                "price"=>"500",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT48w0Di6tLhqaZJmHHJkw42uzmDWb0rJPsCw&usqp=CAU"
            ]
        ]);
    }
}
