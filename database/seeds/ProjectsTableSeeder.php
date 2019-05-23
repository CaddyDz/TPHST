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
        Project::create([
            'title' => 'Reconstruction d\'un ouvrage d\'art',
            'description' => 'Reconstruction d\'un ouvrage d\'art sur RN18 PK37+700',
            'location' => 'Ouled Dilmi',
        ]);
        Project::create([
            'title' => 'PROGRAMME LOGEMENTS LOCATION-VENTE',
            'description' => 'Réalisation des travaux de viabilistion de 2000 logements et des locaux à usage commercial et professionel y afférent ville nouvelle Sidi Abdellah WILIYA d\'ALGER << Programme des 230000 logements Location-vente >>',
            'location' => 'ville nouvelle Sidi Abdellah WILIYA d\'ALGER',
        ]);
        Project::create([
            'title' => 'TRAITEMENT DE GLISSEMENT SUR RN66 (LOT N° 02 ET LOT N° 04)',
            'description' => 'Mise a niveau des routes nationales dans le cadre programme de consolidation de la croissance économique - 2013 -',
            'location' => 'RN66',
        ]);
        Project::create([
            'title' => 'VOIRIE ET AMENAGEMENT EXTERIEUR',
            'description' => 'Réalisation des travaux de resorption du deficite en V.R.D de la cité 680 logements Bananier WILIYA de Blida',
            'location' => 'la cité 680 logements Bananier WILIYA de Blida',
        ]);
        Project::create([
            'title' => 'DÉCAISSEMENT VOIRIES ET ROULES',
            'description' => 'Travaux d\'amenagemebt et VRD du pole universitaire El Affroune WILIYA de Blida',
            'location' => 'pole universitaire El Affroune WILIYA de Blida',
        ]);
        Project::create([
            'title' => 'LOT N°12',
            'description' => 'Amenagement et ouverture de piste forestiéres',
            'location' => 'Aîn Defla',
        ]);
    }
}
