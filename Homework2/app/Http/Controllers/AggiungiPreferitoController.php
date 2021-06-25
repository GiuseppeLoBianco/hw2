<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Preferiti;
use Illuminate\Support\Facades\Session;

class AggiungiPreferitoController extends Controller{
    public function aggiungi(){
        $request = request();
        $id_utente = session("user_id");
        $ti = $request->titolo;
        $im = $request->img;
        $de = $request->descr;

       if( $res = Preferiti::where("id_utente",$id_utente)->where("title",$ti)->where("img",$im)->where("descr",$de)->exists()){
            $return_data = array('var'=>  true);
             echo json_encode($return_data);
        }
        else{
            Preferiti::create([
                "title" => $ti,
                "img" => $im,
                "descr" => $de,
                "id_utente" => $id_utente
            ]);
            $return_data = array('var' =>  false);
            echo json_encode($return_data);
       }

    }
}
?>