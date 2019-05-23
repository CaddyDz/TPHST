<?php

use Illuminate\Database\Seeder;
use TPHST\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $body = '<div>Consultexperts are slowly gaining immense recognition and are growing phenomenally with more and more people trading with this digital currency. The universal acceptance of Consultation has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.Consultations are slowly gaining immense recognition and are growing phenomenally with more and more people trading with this digital currency. The universal acceptance of Consultation has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.<br>Consultations are slowly gaining immense recognition and are growing phenomenally with more and more people trading with this digital currency. The universal acceptance of Consultation has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.<br>Consultations are slowly gaining immense recognition and are growing phenomenally with more and more people trading with this digital currency. The universal acceptance of Consultation has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.Consultations are slowly gaining immense recognition and are growing phenomenally with more and more people trading with this digital currency. The universal acceptance of Consultation has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.<br><br></div>';
        $articles = [
            [
                'title' => 'Business Management',
                'excerpt' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.'
            ],
            [
                'title' => 'All The Lorem Ipsum Generators On The Internet Tend.',
                'excerpt' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.'
            ],
            [
                'title' => 'Randomised Words Which Don\'t Look Even Slightly Have.',
                'excerpt' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.'
            ],
        ];
        foreach ($articles as $article) {
            Article::create([
                'author_id' => 1,
                'title' => $article['title'],
                'excerpt' => $article['excerpt'],
                'body' => $body,
                'category_id' => rand(1, 8),
                'slug' => sluggify($article['title']),
            ]);
        }
    }
}
