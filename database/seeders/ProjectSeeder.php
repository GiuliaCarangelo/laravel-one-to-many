<?php

namespace Database\Seeders;


use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = array(
            array(
                'name' => 'DC Comics',
                'programming_languages' => 'HTML, CSS, PHP, MySQL, Blade, Laravel',
                'repo_url' => 'https://github.com/GiuliaCarangelo/laravel-dc-comics',
                'creation_day' => '2024-02-07' ,
            ),
            array(
                'name' => 'JS Social Posts',
                'programming_languages' => 'HTML, CSS, JavaScript',
                'repo_url' => 'https://github.com/GiuliaCarangelo/js-social-posts',
                'creation_day' => '2023-11-28' ,
            ),
            array(
                'name' => 'BOOLANDO',
                'programming_languages' => 'HTML, CSS',
                'repo_url' => 'https://github.com/GiuliaCarangelo/html-css-boolando',
                'creation_day' => '2023-11-10' ,
            ),
            array(
                'name' => 'Dropbox Layout Reproduction',
                'programming_languages' => 'HTML, CSS',
                'repo_url' => 'https://github.com/GiuliaCarangelo/htmlcss-dropbox',
                'creation_day' => '2023-11-10' ,
            ),
        );

            foreach($projects as $project){
            $newProject = new Project();
            $newProject->name = $project['name'];
            $newProject->programming_languages = $project['programming_languages'];
            $newProject->repo_url = $project['repo_url'];
            $newProject->creation_day = $project['creation_day'];
            $newProject->save();
        }
    }
}
