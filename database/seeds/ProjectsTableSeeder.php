<?php

use Illuminate\Database\Seeder;
use TPHST\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            'Reconstruction d\'un ouvrage d\'art',
            'Programme des 230000 logements Location-vente',
            'TRAITEMENT DE GLISSEMENT SUR RN66 (LOT N° 02 ET LOT N° 04)',
            'VOIRIE ET AMENAGEMENT EXTERIEUR',
            'DÉCAISSEMENT VOIRIES ET ROULES',
            'LOT N°12',
        ];
        Project::create([
            'category_id' => rand(1, 8),
            'title' => $titles[0],
            'slug' => sluggify($titles[0]),
            'description' => 'Reconstruction d\'un ouvrage d\'art sur RN18 PK37+700',
            'location' => 'Ouled Dilmi',
        ]);
        Project::create([
            'category_id' => rand(1, 8),
            'title' => $titles[1],
            'slug' => sluggify($titles[1]),
            'description' => 'Réalisation des travaux de viabilistion de 2000 logements et des locaux à usage commercial et professionel y afférent',
            'location' => 'ville nouvelle Sidi Abdellah WILIYA d\'ALGER',
        ]);
        Project::create([
            'category_id' => rand(1, 8),
            'title' => $titles[1],
            'slug' => sluggify($titles[1]),
            'description' => 'Mise a niveau des routes nationales dans le cadre programme de consolidation de la croissance économique - 2013 -',
            'location' => 'RN66',
        ]);
        Project::create([
            'category_id' => rand(1, 8),
            'title' => $titles[3],
            'slug' => sluggify($titles[3]),
            'description' => 'Réalisation des travaux de resorption du deficite en V.R.D de la cité 680 logements Bananier WILIYA de Blida',
            'location' => 'la cité 680 logements Bananier WILIYA de Blida',
        ]);
        Project::create([
            'category_id' => rand(1, 8),
            'title' => $titles[4],
            'slug' => sluggify($titles[4]),
            'description' => 'Travaux d\'amenagemebt et VRD du pole universitaire El Affroune WILIYA de Blida',
            'location' => 'pole universitaire El Affroune WILIYA de Blida',
        ]);
        Project::create([
            'category_id' => rand(1, 8),
            'title' => $titles[5],
            'slug' => sluggify($titles[5]),
            'description' => 'Amenagement et ouverture de piste forestiéres',
            'location' => 'Aîn Defla',
        ]);
    }
}
