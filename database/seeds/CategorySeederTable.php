<?php

use Illuminate\Database\Seeder;

class CategorySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = collect(array('Pakaian','Rumah','Elektronik','Handphone','Komputer'));
        $category->each(function($c){
        	App\Category::create([
        		'name' 		=> $c,
        		'slug'		=> \Str::slug($c),
        		'parentid'	=> 0
        	]);
        });

    }
}
