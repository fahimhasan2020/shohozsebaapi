<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            [
              "id" => 1,
              "email" => "4455321450",
              "provider_id" => null,  
              "first_name" => "Fahim",
              "last_name" => "Hasan", 
              "gender" => null,
              "profile_picture" => "https://phantom-marca.unidadeditorial.es/9cb97d56736592dadcf4a4bc24216386/resize/1320/f/jpg/assets/multimedia/imagenes/2023/03/14/16787914742783.jpg",
              "push_token" => "e8uEIfIvTXmzcRLuqa3_AH:APA91bFV6H6rBTTHN4nnvV-sDVb_n7Mx2ue0uT8JcIsGgH3FjCm2QDefDp0seWah9lPpujgZxdSlhbicvJffjVzFe736ZpMZZov5sSudE74no231yNY5CS4rKH2k6WshuraNqf2RIIhS",
              "blood_group" => "o+",
              "lat" => "23.8191441",
              "lng" => "90.45259539999999",
              "age" => null,
              "suspended" => 0,
              "blocked" => 0,
              "deactivated" => 0,
              "date_of_birth" => null,
              "phone_number" => null,
            ],
            [
              "id" => 2,
              "email" => "4455321451",
              "provider_id" => null,
              "first_name" => "Fahim",
              "last_name" => "Hasan",
              "gender" => null,
              "profile_picture" => "https://phantom-marca.unidadeditorial.es/9cb97d56736592dadcf4a4bc24216386/resize/1320/f/jpg/assets/multimedia/imagenes/2023/03/14/16787914742783.jpg",
              "push_token" => "e8uEIfIvTXmzcRLuqa3_AH:APA91bFV6H6rBTTHN4nnvV-sDVb_n7Mx2ue0uT8JcIsGgH3FjCm2QDefDp0seWah9lPpujgZxdSlhbicvJffjVzFe736ZpMZZov5sSudE74no231yNY5CS4rKH2k6WshuraNqf2RIIhS",
              "blood_group" => "o+",
              "lat" => "23.8203389",
              "lng" => "90.4203889",
              "age" => null,
              "suspended" => 0,
              "blocked" => 0,
              "deactivated" => 0,
              "date_of_birth" => null,
              "phone_number" => null,
              
            ],
            [
              "id" => 3,
              "email" => "4455321453",
              "provider_id" => null,
              "first_name" => "Fahim",
              "last_name" => "Hasan",
              "gender" => null,
              "profile_picture" => "https://phantom-marca.unidadeditorial.es/9cb97d56736592dadcf4a4bc24216386/resize/1320/f/jpg/assets/multimedia/imagenes/2023/03/14/16787914742783.jpg",
              "push_token" => "e8uEIfIvTXmzcRLuqa3_AH:APA91bFV6H6rBTTHN4nnvV-sDVb_n7Mx2ue0uT8JcIsGgH3FjCm2QDefDp0seWah9lPpujgZxdSlhbicvJffjVzFe736ZpMZZov5sSudE74no231yNY5CS4rKH2k6WshuraNqf2RIIhS",
              "blood_group" => "o+",
              "lat" => "23.8102668",
              "lng" => "90.4313219",
              "age" => null,
              "suspended" => 0,
              "blocked" => 0,
              "deactivated" => 0,
              "date_of_birth" => null,
              "phone_number" => "1711432259",
             
            ],
            [
              "id" => 4,
              "email" => "4455321454",
              "provider_id" => null,
              "first_name" => "Fahim",
              "last_name" => "Hasan",
              "gender" => null,
              "profile_picture" => "https://phantom-marca.unidadeditorial.es/9cb97d56736592dadcf4a4bc24216386/resize/1320/f/jpg/assets/multimedia/imagenes/2023/03/14/16787914742783.jpg",
              "push_token" => "e8uEIfIvTXmzcRLuqa3_AH:APA91bFV6H6rBTTHN4nnvV-sDVb_n7Mx2ue0uT8JcIsGgH3FjCm2QDefDp0seWah9lPpujgZxdSlhbicvJffjVzFe736ZpMZZov5sSudE74no231yNY5CS4rKH2k6WshuraNqf2RIIhS",
              "blood_group" => "ab+",
              "lat" => "23.8102668",
              "lng" => "90.4313219",
              "age" => null,
              "suspended" => 0,
              "blocked" => 0,
              "deactivated" => 0,
              "date_of_birth" => null,
              "phone_number" => null,
            ],
            [
              "id" => 5,
              "email" => "4455321455",
              "provider_id" => null,
              "first_name" => "Fahim",
              "last_name" => "Hasan",
              "gender" => null,
              "profile_picture" => "https://phantom-marca.unidadeditorial.es/9cb97d56736592dadcf4a4bc24216386/resize/1320/f/jpg/assets/multimedia/imagenes/2023/03/14/16787914742783.jpg",
              "push_token" => "e8uEIfIvTXmzcRLuqa3_AH:APA91bFV6H6rBTTHN4nnvV-sDVb_n7Mx2ue0uT8JcIsGgH3FjCm2QDefDp0seWah9lPpujgZxdSlhbicvJffjVzFe736ZpMZZov5sSudE74no231yNY5CS4rKH2k6WshuraNqf2RIIhS",
              "blood_group" => null,
              "lat" => "23.8102668",
              "lng" => "90.4313219",
              "age" => null,
              "suspended" => 0,
              "blocked" => 0,
              "deactivated" => 0,
              "date_of_birth" => null,
              "phone_number" => null,
            ],
            [
              "id" => 6,
              "email" => "4455321456",
              "provider_id" => null,
              "first_name" => "Fahim",
              "last_name" => "Hasan",
              "gender" => null,
              "profile_picture" => "https://phantom-marca.unidadeditorial.es/9cb97d56736592dadcf4a4bc24216386/resize/1320/f/jpg/assets/multimedia/imagenes/2023/03/14/16787914742783.jpg",
              "push_token" => "e8uEIfIvTXmzcRLuqa3_AH:APA91bFV6H6rBTTHN4nnvV-sDVb_n7Mx2ue0uT8JcIsGgH3FjCm2QDefDp0seWah9lPpujgZxdSlhbicvJffjVzFe736ZpMZZov5sSudE74no231yNY5CS4rKH2k6WshuraNqf2RIIhS",
              "blood_group" => null,
              "lat" => null,
              "lng" => null,
              "age" => null,
              "suspended" => 0,
              "blocked" => 0,
              "deactivated" => 0,
              "date_of_birth" => null,
              "phone_number" => null,
            ],
            [
              "id" => 7,
              "email" => "4455321457",
              "provider_id" => null,
              "first_name" => "Fahim",
              "last_name" => "Hasan",
              "gender" => null,
              "profile_picture" => "https://phantom-marca.unidadeditorial.es/9cb97d56736592dadcf4a4bc24216386/resize/1320/f/jpg/assets/multimedia/imagenes/2023/03/14/16787914742783.jpg",
              "push_token" => "e8uEIfIvTXmzcRLuqa3_AH:APA91bFV6H6rBTTHN4nnvV-sDVb_n7Mx2ue0uT8JcIsGgH3FjCm2QDefDp0seWah9lPpujgZxdSlhbicvJffjVzFe736ZpMZZov5sSudE74no231yNY5CS4rKH2k6WshuraNqf2RIIhS",
              "blood_group" => "ab-",
              "lat" => "23.812051",
              "lng" => "90.4220607",
              "age" => null,
              "suspended" => 0,
              "blocked" => 0,
              "deactivated" => 0,
              "date_of_birth" => null,
              "phone_number" => null,
              
            ],
            [
              "id" => 8,
              "email" => "4455321458",
              "provider_id" => null,
              "first_name" => "Fahim",
              "last_name" => "Hasan",
              "gender" => null,
              "profile_picture" => "https://phantom-marca.unidadeditorial.es/9cb97d56736592dadcf4a4bc24216386/resize/1320/f/jpg/assets/multimedia/imagenes/2023/03/14/16787914742783.jpg",
              "push_token" => "e8uEIfIvTXmzcRLuqa3_AH:APA91bFV6H6rBTTHN4nnvV-sDVb_n7Mx2ue0uT8JcIsGgH3FjCm2QDefDp0seWah9lPpujgZxdSlhbicvJffjVzFe736ZpMZZov5sSudE74no231yNY5CS4rKH2k6WshuraNqf2RIIhS",
              "blood_group" => null,
              "lat" => null,
              "lng" => null,
              "age" => null,
              "suspended" => 0,
              "blocked" => 0,
              "deactivated" => 0,
              "date_of_birth" => null,
              "phone_number" => null,
             
            ],
            [
              "id" => 9,
              "email" => "4455321459",
              "provider_id" => null,
              "first_name" => "Fahim",
              "last_name" => "Hasan",
              "gender" => null,
              "profile_picture" => "https://phantom-marca.unidadeditorial.es/9cb97d56736592dadcf4a4bc24216386/resize/1320/f/jpg/assets/multimedia/imagenes/2023/03/14/16787914742783.jpg",
              "push_token" => "e8uEIfIvTXmzcRLuqa3_AH:APA91bFV6H6rBTTHN4nnvV-sDVb_n7Mx2ue0uT8JcIsGgH3FjCm2QDefDp0seWah9lPpujgZxdSlhbicvJffjVzFe736ZpMZZov5sSudE74no231yNY5CS4rKH2k6WshuraNqf2RIIhS",
              "blood_group" => null,
              "lat" => null,
              "lng" => null,
              "age" => null,
              "suspended" => 0,
              "blocked" => 0,
              "deactivated" => 0,
              "date_of_birth" => null,
              "phone_number" => null,
              
            ],
            [
              "id" => 10,
              "email" => "4455321460",
              "provider_id" => null,
              "first_name" => "Fahim",
              "last_name" => "Hasan",
              "gender" => null,
              "profile_picture" => "https://phantom-marca.unidadeditorial.es/9cb97d56736592dadcf4a4bc24216386/resize/1320/f/jpg/assets/multimedia/imagenes/2023/03/14/16787914742783.jpg",
              "push_token" => "e8uEIfIvTXmzcRLuqa3_AH:APA91bFV6H6rBTTHN4nnvV-sDVb_n7Mx2ue0uT8JcIsGgH3FjCm2QDefDp0seWah9lPpujgZxdSlhbicvJffjVzFe736ZpMZZov5sSudE74no231yNY5CS4rKH2k6WshuraNqf2RIIhS",
              "blood_group" => "a+",
              "lat" => "23.7465586",
              "lng" => "90.4128141",
              "age" => null,
              "suspended" => 0,
              "blocked" => 0,
              "deactivated" => 0,
              "date_of_birth" => null,
              "phone_number" => null,
             
            ],
        ];
        DB::table('subscriber')->insert($item);
    }
}
