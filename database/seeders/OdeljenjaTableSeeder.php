<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OdeljenjaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('odeljenjes')->insert(
            [
                ['naziv' => 'opsta hirurgija', 'oblast' => 'hirurgija', 'url' => 'https://akademihospital.com/wp-content/uploads/2018/01/2018-01-02-11.jpg', 'opis' => 'Hirurgija je grana kliničke medicine koja se bavi proučavanjem i lečenjem bolesti koje se moraju lečiti radom ruku hirurga i primenom mehaničkih sredstava. Operativna hirurgija se može podeliti prema pristupu lečenja u četiri grupe: reparacija rana,ekstirpacija obolelih delova ili celih tkiva i organa,rekonstruktivna hirurgija, i fiziološka hirurgija.'],
                ['naziv' => 'ortopedija i traumatologija', 'oblast' => 'ortopedija', 'url' => 'https://akademihospital.com/wp-content/uploads/2018/01/balksz-1-06.jpg', 'opis' => 'Traumatologija je grana medicine koja se bavi hitnim prijemom i lečenjem svih nezgoda. Proučava povrede nastale mehaničkim, kemijskim, fizikalnim i termičkim čimbenicima te zračenjem, a bavi se njihovim sprečavanjem i lečenjem. U većini slučajeva to su prometne nezgode i razne kućne, kao i nezgode na poslu.'],
                ['naziv' => 'rekonstruktivna hirurgija', 'oblast' => 'hirurgija', 'url' => 'https://akademihospital.com/wp-content/uploads/2018/01/balksz-1-07-1024x911.jpg', 'opis' => 'Hirurgija je grana kliničke medicine koja se bavi proučavanjem i lečenjem bolesti koje se moraju lečiti radom ruku hirurga i primenom mehaničkih sredstava. Operativna hirurgija se može podeliti prema pristupu lečenja u četiri grupe: reparacija rana,ekstirpacija obolelih delova ili celih tkiva i organa,rekonstruktivna hirurgija, i fiziološka hirurgija.']
            ]
        );
    }
}
