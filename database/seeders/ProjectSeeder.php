<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = array(
            array(
                "title" => "Vue-Boolzapp",
                "img_url" => "https://picsum.photos/200/300",
                "date" => "2023-05-12",
                "description" => "Realizzare l'esercizio Vue Boolzapp usando Vue 3 come visto finora a lezione."
            ),
            array(
                "title" => "vite-comics",
                "img_url" => "https://picsum.photos/200/300",
                "date" => "2023-12-15",
                "description" => "Create un nuovo progetto utilizzando Vite e Vue 3 e definite i componenti necessari per strutturare il layout"
            ),
            array(
                "title" => "Vite Yu-Gi-Oh",
                "img_url" => "https://picsum.photos/200/300",
                "date" => "2023-12-18",
                "description" => "Create un nuovo progetto utilizzando Vite e Vue 3 e definite i componenti.Al caricamento della pagina, effettuate una chiama ajax all'API."
            ),
            array(
                "title" => "php-dischi-json",
                "img_url" => "https://www.example.com/immagine2.jpg",
                "date" => "2024-01-16",
                "description" => "creare una web-app che permetta di leggere una lista di dischi presente nel nostro server."
            ),
        );

        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->title = $project['title'];
            $newProject->img_url = $project['img_url'];
            $newProject->date = $project['date'];
            $newProject->description = $project['description'];
            $newProject->save();
        }
    }
}
