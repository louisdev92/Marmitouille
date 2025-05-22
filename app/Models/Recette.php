<?php
//
//namespace App\Models;
//use Illuminate\Support\Arr;
//
//class Recette
//{
//    public static function all()
//    {
//    }
//
//    public function getAll(): array
//    {
//        return [
//            1 => [
//                'title' => 'Recette 1',
//                'description' => 'Description de la recette 1',
//                'ingredients' => ['Ingrédient 1', 'Ingrédient 2', 'Ingrédient 3'],
//                'instructions' => 'Instructions de la recette 1',
//            ],
//            2 => [
//                'title' => 'Recette 2',
//                'description' => 'Description de la recette 2',
//                'ingredients' => ['Ingrédient A', 'Ingrédient B', 'Ingrédient C'],
//                'instructions' => 'Instructions de la recette 2',
//            ],
//            3 => [
//                'title' => 'Recette 3',
//                'description' => 'Description de la recette 3',
//                'ingredients' => ['Ingrédient X', 'Ingrédient Y', 'Ingrédient Z'],
//                'instructions' => 'Instructions de la recette 3',
//            ],
//        ];
//    }
//
//    public function getById(int $id): array
//    {
//        $recettes = $this->getAll();
//        return Arr::get($recettes, $id, ['title' => 'Recette introuvable', 'description' => 'Aucune Description']);
//
//    }
//}

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $fillable = ['titre', 'description'];
}
