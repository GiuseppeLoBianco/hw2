<?php


use Illuminate\Routing\Controller;
use App\Models\User;

class LoginController extends Controller{

    public function index(){
        if(isset($_SESSION['user_id'])){
            return redirect("home")
            ->with("user",$user);
          
        } else 
            return view("login")
            ->with("csrf_token",csrf_token());
    }

    public function checklogin(){
    
        $user = User::where("username", request("username"))->first();
        if(isset($user)){
            //NOME UTENTE VALIDO
            if(password_verify(request("password"),$user->password)){
                //CREDENZIALI VALIDE
            Session::put("user_id",$user->id);
            return redirect("home")
                   ->with("user",$user);
            }
            else{
                //CREDENZIALI NON VALIDE
                return redirect("login")->withinput();
            }
        }else{
            //NOME UTENTE NON VALIDO
            return redirect("login");
        }
    }
}

?>