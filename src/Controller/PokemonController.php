<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController
{
    #[Route("/pokemon")]
    public function getPokemon ()
    {
        $pokemon = 
        [
            "name" => "pikachu",
            "type" => "electric",
            "code" => "838",
            "description" => "Es un pokemon amarillo y su ataque es la electricidad",
            "img" => "https://static.printler.com/cache/b/d/e/4/6/9/bde46975a186eb17f441a26b2a0b1cbfb1b0b129.jpg"
        ];
        return $this -> render("pokemons/pokemon.html.twig", ["pokemon" => $pokemon ]);
    }
}