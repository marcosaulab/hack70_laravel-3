<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public $comics = [
        [
            'id' => 1,
            'title' => "Demon's Layer",
            'editor' => "Shueisha",
            'genre' => "Azione",
            'img' => "dl.jpg",
            'abstract' => "Giappone, Periodo Taishō. Tanjiro è il primogenito di una numerosa famiglia orfana del padre, che vive in un'isolata casa di montagna tra i boschi. Un giorno, tornando a casa dopo essere stato al villaggio a vendere il carbone, trova la madre e i fratelli massacrati, ad eccezione della sorella Nezuko che è stata trasformata in un demone, ma ha ancora qualche pensiero ed emozione umana. Tanjiro inizia così il suo viaggio in cerca di una cura per far tornare sua sorella di nuovo umana e per impedire che la stessa tragedia accaduta a loro possa accadere ad altre persone.",
            'release' => "2016"
        ],
        [
            'id' => 2,
            'title' => "Dylan Dog",
            'editor' => "Sergio Bonelli",
            'genre' => "Horror",
            'img' => "dd.jpg",
            'abstract' => "Dylan Dog è un personaggio dei fumetti creato da Tiziano Sclavi ed elaborato graficamente da Claudio Villa e Angelo Stano[senza fonte], protagonista dell'omonima serie di genere horror edita dal 1986 dalla Daim Press che poi divenne la Sergio Bonelli Editore.[3] La serie ha raggiunto presto un successo tale da renderlo uno dei fumetti italiani più venduti, oggetto di numerose ristampe[4][5][6][7] e considerato un cult del fumetto italiano[4]. Gli albi della serie a fumetti sono tradotti e pubblicati anche all'estero[8]. Al personaggio è ispirato un film omonimo del 2010[9].",
            'release' => "1986"
        ],
        [
            'id' => 3,
            'title' => "One-Punch Man",
            'editor' => "Shueisha",
            'genre' => "Azione",
            'img' => "op.jpg",
            'abstract' => "One-Punch Man  è un manga realizzato da One e pubblicato sul suo blog a partire dal 3 luglio 2009[4].",
            'release' => "2012"
        ],
    ];

    public function homepage() {
        return view('welcome', ['comics' => $this->comics]);
    }


}
