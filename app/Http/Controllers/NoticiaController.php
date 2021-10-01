<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NoticiaController extends Controller
{
    public function noticias(Request $request)
    {
        //api
        $api = new Client([
            'base_uri' => 'https://hacker-news.firebaseio.com/v0/',
        ]);

        //get 10 noticias
        $res = $api->request('GET','newstories.json');
        $aux = $res->getBody();
        $noticiasId = json_decode($aux,true);

        //lista
        $listaNoticias = array();

        //get cada noticia
        foreach($noticiasId as $id)
        {
            if(count($listaNoticias)<10)
            {
                //get title and url
                $not_g = $api->request('GET','item/'.$id.'.json');
                $not_d = $not_g->getBody();
                $noticia = json_decode($not_d,true);
                if($noticia['type'] == 'story')
                {
                    /* $listaNoticias[] = array(
                        'id' => $noticia['id'],
                        'title' => $noticia['title'],
                        'url' => $noticia['url']
                    ); */
                    $listaNoticias[] = $noticia;
                }
            }
        }

        return response()->json($listaNoticias,200);
    }
}
