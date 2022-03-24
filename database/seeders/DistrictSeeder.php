<?php

namespace Database\Seeders;

use App\Models\district;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts_ar = [
            "أركان ",
            "الحى 1 ",
            "الحى 10 ",
            "الحى 11 ",
            "الحى 12 ",
            "الحى 13 ",
            "الحى 14 ",
            "الحى 16 ",
            "الحى 2 ",
            "الحى 3 ",
            "الحى 4 ",
            "الحى 5 ",
            "الحى 6 ",
            "الحى 7 ",
            "الحى 8 ",
            "الحى 9 ",
            "الربوة ",
            "أليجريا ",
            "بيت الوطن ",
            "بيفرلي هيلز ",
            "بيللفيل ",
            "تارا ",
            "بوابة مصر - اعمار ",
            "جامعة القاهرة ",
            "جامعة النيل ",
            "رويال سيتي ",
            "رويال ميدوز ",
            "زايد انترناشيونال بارك ",
            "زايد سنترال بارك ",
            "زايد كريستال بارك ",
            "كابيتال بيزنس بارك ",
            "كونتينتال - فيلات ",
            "كونتينتال ريزيدنس ",
            "محطة معالجة مياة-شيخ زايد ",
            "مدينة الخمايل ",
            "مدينة ريفيرا ",
            "ويست تاون",
            "حدائق المهندسين",
        ];


        $districts_en = [
            "Arkan",
            "District 1",
            "District 10",
            "District 11",
            "District 12",
            "District 13",
            "District 14",
            "District 16",
            "District 2",
            "District 3",
            "District 4",
            "District 5",
            "District 6",
            "District 7",
            "District 8",
            "District 9",
            "El Rabwa",
            "Allegria",
            "Beit El Watan",
            "Beverly Hills",
            "Belleville",
            "Tara",
            "Cairo Gate-Emaar Misr",
            "Cairo University",
            "Nile University",
            "Royal City",
            "Royal Meadows",
            "Zayed International Park",
            "Zayed Central Park",
            "Zayed Crystals park",
            "Capital Business Park",
            "Continental Villas section",
            "Continental Residence",
            "Water Treatment Plant",
            "Riviera City",
            "Westown",
            "Hadayek El-Mohandiseen",
        ];

        for ($i=0; $i < count($districts_ar)-1; $i++) {


            district::create([
                'name_ar' => $districts_ar[$i],
                'name_en' => $districts_en[$i],

            ]);
        }



    }
}
