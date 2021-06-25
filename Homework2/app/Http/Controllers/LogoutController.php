<?php


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller{
    public function logout(){
            Session::flush();
            return redirect("login")
            ->with("csrf_token",csrf_token());
            
    }
}
?>