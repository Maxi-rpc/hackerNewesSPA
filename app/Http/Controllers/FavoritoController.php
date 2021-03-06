<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorito;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

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

    public function favoritos(Request $request)
    {
        $user = Auth::user();
        $listaFavoritos = Favorito::where('emailUser',$user->email)->get();

        return response()->json($listaFavoritos,200);
    }

    public function eliminar(Request $request)
    {
        $user = $request->user;
        $favorito = $request->favorito;
        Favorito::findOrFail($favorito['id'])->delete();

        $message = array(
            'code' => 'success',
            'message' => 'Se elimino de favoritos',
        );
        

        return response()->json($message,200);
    }
}
