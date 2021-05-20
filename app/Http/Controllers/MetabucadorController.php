<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabucadorController extends Controller
{
    //ACCION PARAMOSTRAR EL FORMULARIO DE BUSQUEDA
    public function formulario_buscador(){
        //MOSTRAR UNA VISTA
        return view('metabuscador');

    }

    //ACCION PARA REALIZAR LA BUSQUEDA
    public function buscar(){
        $termino =$_POST["termino"];
        $motor = $_POST["motores"];

        switch($motor){
            case 1: return redirect()-> to("https://www.google.com/search?q=$termino");
                break;
            case 2: return redirect()-> to("https://www.bing.com/search?q=$termino");
                break;
            case 3: return redirect()-> to("https://espanol.search.yahoo.com/search?p=$termino");
                    break;
            case 4: return redirect()-> to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 5: return redirect()-> to("http://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$termino");
                break;
            case 6: return redirect()-> to("https://yandex.com/search/?text=$termino");
                break;
            case 7: return redirect()-> to("https://gigablast.com/search?c=main&qlangcountry=en-us&q=$termino");
                break;
            case 8: return redirect()-> to("https://duckduckgo.com/?q=$termino");
                break;
            case 9: return redirect()-> to("https://www.findx.com/search?q=$termino");
                break;
            case 10: return redirect()-> to("https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=$termino");
                break;
            case 11: return redirect()-> to("https://www.instagram.com/?hl=$termino");
                break;
        }

    }
}
