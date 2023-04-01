<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ["id" => 1,"facebook" => "","instagram" => "", "messanger" => "","whatsapp"=>"","email"=>"","phone_number"=>"","linkedin"=>"","twitter"=>"","youtube"=>"","imo"=>"","agora_token"=>""]
        ];
        foreach ($items as $item) {
            DB::table("social_platforms")->insert($item);
        }
    }
}
