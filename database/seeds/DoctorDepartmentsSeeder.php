<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorDepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $items = [
            ["id" => 1,"name" => "Cardiology","imagepath" => "/cardiology.jpg","description" => '',],
            ["id" => 2,"name" => "Cardiothorasic Surgery","imagepath" => "/cardiothorasicsurgery.jpg","description" => '',],
            ["id" => 3,"name" => "urology","imagepath" => "/urology.jpg","description" => '',],
            ["id" => 4,"name" => "Colorectal Surgery","imagepath" => "/colorectalsurgery.jpg","description" => '',],
            ["id" => 5,"name" => "Corona (covid-19)","imagepath" => "/corona(covid-19).jpg","description" => '',],
            ["id" => 6,"name" => "Dentistry","imagepath" => "/dentistry.jpg","description" => '',],
            ["id" => 7,"name" => "ENT","imagepath" => "/ent.jpg","description" => '',],
            ["id" => 8,"name" => "eye","imagepath" => "/eye.jpg","description" => '',],
            ["id" => 9,"name" => "Gastroenterology","imagepath" => "/gastroenterology.jpg","description" => '',],
            ["id" => 10,"name" => "General Physician Female","imagepath" => "/generalphysician.jpg","description" => '',],
            ["id" => 11,"name" => "General Physician Male","imagepath" => "/generalphysicianmale.jpg","description" => '',],
            ["id" => 12,"name" => "General Practitioner","imagepath" => "/generalpractitioner.jpg","description" => '',],
            ["id" => 13,"name" => "General Surgery","imagepath" => "/generalsurgery.jpg","description" => '',],
            ["id" => 14,"name" => "Gynecology","imagepath" => "/gynecology.jpg","description" => '',],
            ["id" => 15,"name" => "Hematology","imagepath" => "/hematology.jpg","description" => '',],
            ["id" => 16,"name" => "medicine","imagepath" => "/medicine.jpg","description" => '',],
            ["id" => 17,"name" => "Nephrology","imagepath" => "/nephrology.jpg","description" => '',],
            ["id" => 18,"name" => "Neurology","imagepath" => "/neurology.jpg","description" => '',],
            ["id" => 19,"name" => "Neuro-surgery","imagepath" => "/neuro-surgery.jpg","description" => '',],
            ["id" => 20,"name" => "Nutritionist","imagepath" => "/nutritionist.jpg","description" => '',],
            ["id" => 21,"name" => "Oncology (cancer)","imagepath" => "/oncology(cancer).jpg","description" => '',],
            ["id" => 22,"name" => "Orthopedics","imagepath" => "/orthopedics.jpg","description" => '',],
            ["id" => 23,"name" => "Pain Medicine","imagepath" => "/painmedicine.jpg","description" => '',],
            ["id" => 24,"name" => "Pediatrics","imagepath" => "/pediatrics.jpg","description" => '',],
            ["id" => 25,"name" => "Physical Medicine","imagepath" => "/physicalmedicine.jpg","description" => '',],
            ["id" => 26,"name" => "Physiotherapy","imagepath" => "/physiotherapy.jpg","description" => '',],
            ["id" => 27,"name" => "Plastic Surgery","imagepath" => "/plasticsurgery.jpg","description" => '',],
            ["id" => 28,"name" => "Psychiatry","imagepath" => "/psychiatry.jpg","description" => '',],
            ["id" => 29,"name" => "Sexual Health","imagepath" => "/sexualhealth.jpg","description" => '',],
            ["id" => 30,"name" => "skin VD","imagepath" => "/skin_vd.jpg","description" => '',],
        ];

        DB::table('doctor_departments')->insert($items);
    }
}
