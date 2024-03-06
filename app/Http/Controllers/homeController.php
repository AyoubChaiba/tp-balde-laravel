<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index () {
        $groupes = [
            [
                'id' => 1,
                'nomGroupe' => "FUS201",
                'membres' => [
                    ['id' => 1, 'nom' => "slacui", 'prenom' => "sanee", 'moyenneBac' => 10.5],
                    ['id' => 2, 'nom' => "kamili", 'prenom' => "saai", 'moyenneBac' => 14],
                    ['id' => 3, 'nom' => "werwani", 'prenom' => "kanal", 'moyenneBac' => 11.6]
                ]
            ],
            [
                'id' => 2,
                'nomGroupe' => "FUS202",
                'membres' => [
                    ['id' => 4, 'nom' => "mouhis", 'prenom' => "hibe", 'moyenneBac' => 13],
                    ['id' => 5, 'nom' => "ouba", 'prenom' => "soufiane", 'moyenneBac' => 12]
                ]
            ]
        ];

        return view('pages.home',compact('groupes'));
    }


}
