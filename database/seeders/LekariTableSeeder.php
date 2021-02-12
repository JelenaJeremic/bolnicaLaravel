<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LekariTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lekars')->insert(
            [
                ['ime' => 'Ivan', 'prezime' => 'Markovic', 'zvanje' => 'doktor', 'biografija' => 'redovni član Evropske akademije nauka  je rođen 1947. godine u Sečnju. Poreklom je iz krševite Hercegovine, odakle su mu roditelji dospeli u ravni Banat sa Ćopićevom ,,osmom ofanzivom,,.Osnovnu školu je završio u Sečnju, srednju medicinsku u Zrenjaninu, a studije medicine na Univerzitetu u Sarajevu.Dobitnik je Zlatne značke za odličan uspeh u studiranju. Specijalizaciju iz ORL završio je 1978. godine na klinici u Sarajevu.Magistar medicinskih nauka postaje 1980., a 1990. dobija zvanje primarijusa. ', 'iskustvo' => 'preko 20 godina iskustva u radu', 'specijalnost' => 'specijalan', 'obrazovanje' => 'Univerzitet u Beogradu Medicinski Fakultet', 'odeljenje_id' => 1, 'slika' => 'https://www.belmedic.rs/img/doctors/59d79dc430e61.jpg'],
                ['ime' => 'Milos', 'prezime' => 'Arsenijevic', 'zvanje' => 'Dr/mr', 'biografija' => 'redovni član Evropske akademije nauka  je rođen 1947. godine u Sečnju. Poreklom je iz krševite Hercegovine, odakle su mu roditelji dospeli u ravni Banat sa Ćopićevom ,,osmom ofanzivom,,.Osnovnu školu je završio u Sečnju, srednju medicinsku u Zrenjaninu, a studije medicine na Univerzitetu u Sarajevu.Dobitnik je Zlatne značke za odličan uspeh u studiranju. Specijalizaciju iz ORL završio je 1978. godine na klinici u Sarajevu.Magistar medicinskih nauka postaje 1980., a 1990. dobija zvanje primarijusa. ', 'iskustvo' => 'preko 20 godina iskustva u radu', 'specijalnost' => 'specijalan', 'obrazovanje' => 'Univerzitet u Beogradu Medicinski Fakultet', 'odeljenje_id' => 1, 'slika' => 'https://www.belmedic.rs/img/doctors/59d79dc430e61.jpg'],
                ['ime' => 'Nebojsa', 'prezime' => 'Vojvodic', 'zvanje' => 'doktor', 'biografija' => 'redovni član Evropske akademije nauka  je rođen 1947. godine u Sečnju. Poreklom je iz krševite Hercegovine, odakle su mu roditelji dospeli u ravni Banat sa Ćopićevom ,,osmom ofanzivom,,.Osnovnu školu je završio u Sečnju, srednju medicinsku u Zrenjaninu, a studije medicine na Univerzitetu u Sarajevu.Dobitnik je Zlatne značke za odličan uspeh u studiranju. Specijalizaciju iz ORL završio je 1978. godine na klinici u Sarajevu.Magistar medicinskih nauka postaje 1980., a 1990. dobija zvanje primarijusa. ', 'iskustvo' => 'preko 20 godina iskustva u radu', 'specijalnost' => 'specijalan', 'obrazovanje' => 'Univerzitet u Beogradu Medicinski Fakultet', 'odeljenje_id' => 1, 'slika' => 'https://www.belmedic.rs/img/doctors/59d79dc430e61.jpg'],
                ['ime' => 'Srdjan', 'prezime' => 'Nikolic', 'zvanje' => 'doktor', 'biografija' => 'redovni član Evropske akademije nauka  je rođen 1947. godine u Sečnju. Poreklom je iz krševite Hercegovine, odakle su mu roditelji dospeli u ravni Banat sa Ćopićevom ,,osmom ofanzivom,,.Osnovnu školu je završio u Sečnju, srednju medicinsku u Zrenjaninu, a studije medicine na Univerzitetu u Sarajevu.Dobitnik je Zlatne značke za odličan uspeh u studiranju. Specijalizaciju iz ORL završio je 1978. godine na klinici u Sarajevu.Magistar medicinskih nauka postaje 1980., a 1990. dobija zvanje primarijusa. ', 'iskustvo' => 'preko 20 godina iskustva u radu', 'specijalnost' => 'specijalan', 'obrazovanje' => 'Univerzitet u Beogradu Medicinski Fakultet', 'odeljenje_id' => 1, 'slika' => 'https://www.belmedic.rs/img/doctors/59d79dc430e61.jpg'],
                ['ime' => 'Marko', 'prezime' => 'Ninkovic', 'zvanje' => 'Dr/mr', 'biografija' => 'redovni član Evropske akademije nauka  je rođen 1947. godine u Sečnju. Poreklom je iz krševite Hercegovine, odakle su mu roditelji dospeli u ravni Banat sa Ćopićevom ,,osmom ofanzivom,,.Osnovnu školu je završio u Sečnju, srednju medicinsku u Zrenjaninu, a studije medicine na Univerzitetu u Sarajevu.Dobitnik je Zlatne značke za odličan uspeh u studiranju. Specijalizaciju iz ORL završio je 1978. godine na klinici u Sarajevu.Magistar medicinskih nauka postaje 1980., a 1990. dobija zvanje primarijusa. ', 'iskustvo' => 'preko 20 godina iskustva u radu', 'specijalnost' => 'specijalan', 'obrazovanje' => 'Univerzitet u Beogradu Medicinski Fakultet', 'odeljenje_id' => 1, 'slika' => 'https://www.belmedic.rs/img/doctors/59d79dc430e61.jpg'],
                ['ime' => 'Djorjde', 'prezime' => 'Lazarevic', 'zvanje' => 'doktor', 'biografija' => 'redovni član Evropske akademije nauka  je rođen 1947. godine u Sečnju. Poreklom je iz krševite Hercegovine, odakle su mu roditelji dospeli u ravni Banat sa Ćopićevom ,,osmom ofanzivom,,.Osnovnu školu je završio u Sečnju, srednju medicinsku u Zrenjaninu, a studije medicine na Univerzitetu u Sarajevu.Dobitnik je Zlatne značke za odličan uspeh u studiranju. Specijalizaciju iz ORL završio je 1978. godine na klinici u Sarajevu.Magistar medicinskih nauka postaje 1980., a 1990. dobija zvanje primarijusa. ', 'iskustvo' => 'preko 20 godina iskustva u radu', 'specijalnost' => 'specijalan', 'obrazovanje' => 'Univerzitet u Beogradu Medicinski Fakultet', 'odeljenje_id' => 1, 'slika' => 'https://www.belmedic.rs/img/doctors/59d79dc430e61.jpg']
            ]
        );
    }
}
