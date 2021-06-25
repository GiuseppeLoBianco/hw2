<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class PreferitiController extends Controller{
    public function index(){
        $session_id = session("user_id");
        $user = User::find($session_id);
        if(!isset($user)){
            return view("login")
            ->with("csrf_token",csrf_token());
        }
        return view("preferiti")
        ->with("user",$user);
    }
}
?>