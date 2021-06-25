<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Preferiti;
use Illuminate\Support\Facades\Session;

class RimuoviPreferitoController extends Controller{
    public function rimuovi($title,$id){
        $id_utente = session("user_id");
        $result = Preferiti::where("id_utente",$id_utente)->where("title",$title)->where("id",$id);
        if($result){
            $result->delete();
        }
        
    }
}
?>