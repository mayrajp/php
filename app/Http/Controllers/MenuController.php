<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personagem;


class MenuController extends Controller
{
    public function carregaPeronagens(){

     $personagens = array("Frodo", "Sam", "Merry","Pippin", "Aragorn", "Boromir", "Legolas", "Gimli", "Gandalf");
     $somaHabilidades = array(3, 7, 5, 4, 14, 13, 18, 11, 17);

      return view('menu.index', compact('personagens', 'somaHabilidades'));
    }

    public function associarArma(Request $request){

      $personagens = $request->input('personagemSelecionado');
      $pontosPersonagens = $request->input('ponto');
      return view('menu.associarArmas', compact('personagens', 'pontosPersonagens'));

    }

    public function gerarInimigos(Request $request){

       $pontosPersonagens = $request->input('pontos');
       $personagens = $request->input('personagens');
       $armasPersonagem = $request->input('armaSelecionada');

        $personagensDoMal = [
          (object)["nome"=> "Olho de Sauron", "poder" => 1200, "tipo"=> "mago"],
          (object)["nome"=> "Uruk-Hai", "poder" => 17, "tipo"=> "orc"],
          (object)["nome"=> "Snaga", "poder" => 7, "tipo"=> "orc"]
        ];

        $inimigo1 = $personagensDoMal[array_rand($personagensDoMal, 1)];
        $inimigo2 = $personagensDoMal[array_rand($personagensDoMal, 1)];
        $inimigo3 = $personagensDoMal[array_rand($personagensDoMal, 1)];
        $inimigo4 = $personagensDoMal[array_rand($personagensDoMal, 1)];
        $inimigo5 = $personagensDoMal[array_rand($personagensDoMal, 1)];
        $inimigos = array($inimigo1, $inimigo2, $inimigo3, $inimigo4, $inimigo5);

        $listaArmas = [
         (object)["nome"=> "Espada Curta", "poder" => 7],
         (object)["nome"=> "Espada Curta Mágica", "poder" => 8],
         (object)["nome"=> "Espada Longa", "poder" => 7],
         (object)["nome"=> "Duas Espadas", "poder" => 9],
         (object)["nome"=> "Arco curto", "poder" => 7],
         (object)["nome"=> "Arco Longo", "poder" => 11],
         (object)["nome"=> "Machado", "poder" => 7],
         (object)["nome"=> "Machado Duplo", "poder" => 10]
       ];

         $armaInimiga1 = $listaArmas[array_rand($listaArmas, 1)];
         $armaInimiga2 = $listaArmas[array_rand($listaArmas, 1)];
         $armaInimiga3 = $listaArmas[array_rand($listaArmas, 1)];
         $armaInimiga4 = $listaArmas[array_rand($listaArmas, 1)];
         $armaInimiga5 = $listaArmas[array_rand($listaArmas, 1)];
         $armasInimigas = array($armaInimiga1, $armaInimiga2, $armaInimiga3, $armaInimiga4, $armaInimiga4);


       return view('menu.gerarBatalha', compact('personagens', 'inimigos', 'armasPersonagem', 'pontosPersonagens', 'armasInimigas'));
    }

    public function gerarResultadoBatalha(Request $request){

      $pontosJogador = $request->input('pontosPersonagem');
      $pontosInimigo = $request->input('pontosInimigo');
      $venceu = 0;
      $perdeu = 0;
       foreach ($pontosJogador as $i => $ponto) {
         if($ponto > $pontosInimigo[$i]){
             $venceu++;
         }else {
             $perdeu++;
         }
       }
       $resultado = "";
       if($venceu > $perdeu){
         $resultado = "Parabéns, você ganhou :)";
       } else if ($venceu < $perdeu){
         $resultado = "Você perdeu :(";
       } else {
            $resultado = "Empatou :/";
       }

      return view('menu.resultadoBatalha')->with(['r' => $resultado]);
    }

}
