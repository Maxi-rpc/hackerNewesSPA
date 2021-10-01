<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorito;

class FavoritoController extends Controller
{
    public function guardar(Request $request)
    {
        $user = $request->user;
        $noticia = $request->noticia;

        Favorito::create([
            'title' => $noticia['title'],
            'url' => $noticia['url'],
            'emailUser' => $user['email'],
        ]);

        $message = 'Se agrego a Favoritos.';

        return response()->json($message,200);
    }
}
