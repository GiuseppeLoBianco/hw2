<?php

use Illuminate\Routing\Controller;
use App\Models\User;

class TopController extends Controller{

    public function mostraTop(){
    header('Content-Type: application/json');

    $url = 'https://www.episodate.com/api/most-popular';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $res=curl_exec($ch);
    curl_close($ch);
    echo $res;


    }
    
}
?>