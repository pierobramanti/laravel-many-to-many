<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $techs = [
            'html',
            'css',
            'javascript',
            'bootstrap',
            'vue.js',
            'jquery',
            'php',
            'laravel',
            'reactjs'
        ];

        foreach ($techs as $tech) {
            $technology = new Technology(); 
            $technology->name = $tech;
            $technology->slug = Technology::generateSlug($tech);  

            $technology->save(); 
        }
    }
}
