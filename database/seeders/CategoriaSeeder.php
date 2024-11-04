<?php

namespace Database\Seeders;

use App\Models\categorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            $categorias = new categorias();
            $categorias->title = 'titulo ' . $i;
            $categorias->content = 'contenido ' . $i;
            $categorias->category = 'categoria ' . $i;
            $categorias->published_at = now();
            $categorias->save();
        }
        /*$categorias = new categorias();

        $categorias->title = 'categoria 1';
        $categorias->content = 'content 1';
        $categorias->category= 'category 1';
        $categorias->published_at = now();
        
        $categorias->save();

        $categorias = new categorias();

        $categorias->title = 'categoria 2';
        $categorias->content = 'content 2';
        $categorias->category= 'category 2';
        $categorias->published_at = now();
        
        $categorias->save();

        $categorias = new categorias();

        $categorias->title = 'categoria 3';
        $categorias->content = 'content 3';
        $categorias->category= 'category 3';
        $categorias->published_at = now();
        
        $categorias->save();
        $categorias = new categorias();

        $categorias->title = 'categoria 4';
        $categorias->content = 'content 4';
        $categorias->category= 'category 4';
        $categorias->published_at = now();
        
        $categorias->save();*/

        
    }
}