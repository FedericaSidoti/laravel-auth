<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title'=> 'Boolando',
                'thumb'=> 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fthematrixnetworknews.com%2Fhow-to-code-a-guide-to-coding%2F&psig=AOvVaw30eeHd2wD7unblj80KHrHY&ust=1703262556420000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIiwvdf5oIMDFQAAAAAdAAAAABAU',
                'description' => 'Lorem Ipsum'
            ],

            [
                'title'=> 'Boolzapp',
                'thumb'=> 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.icbrigatasassari.edu.it%2Fprogetto%2Fcoding-unplugged-e-coding-su-computer&psig=AOvVaw30eeHd2wD7unblj80KHrHY&ust=1703262556420000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIiwvdf5oIMDFQAAAAAdAAAAABAc',
                'description' => 'Lorem Ipsum'
            ],

            [
                'title'=> 'ToBoolist',
                'thumb'=> 'https://imageio.forbes.com/blogs-images/forbestechcouncil/files/2019/01/canva-photo-editor-8-7.jpg?height=640&width=640&fit=bounds',
                'description' => 'Lorem Ipsum'
            ]
        ];

        foreach($projects as $project){
            $newProject = new Project(); 
            $newProject->title = $project['title'];
            $newProject->thumb = $project['thumb'];
            $newProject->description = $project['description'];

            $newProject->save();
        }    
    }
}
