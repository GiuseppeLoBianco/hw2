<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Preferiti;

class MostraPreferitiController extends Controller{
    public function mostra(){
        $id = session("user_id");
        $result = Preferiti::where("id_utente", $id)->get();
        echo json_encode($result);

    }
}
?>