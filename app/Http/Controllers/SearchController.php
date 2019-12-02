<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twitter;
use App;
use App\Search;

class SearchController extends Controller
{
    public function buscar(Request $request)
    {
        $data = '';
        $termino = $request->input('tuits');
        if (isset ($termino)) {
            
            $a = ['q' => $termino, 'count' => 10, 'format' => 'array'];
            $data = Twitter::getSearch($a);
            $nuevo = App\Search::create(['término' => $termino]);
        }
        //dd(Twitter::getSearch("hola"));
        /*foreach($data['statuses'] as $tweet) {
            echo $tweet['text'];
        }*/
        return view('buscador', compact('data'));
    }

    public function historial()
    {//
        $historial = App\Search::all();
        return view('historial', compact('historial'));
    }
}
