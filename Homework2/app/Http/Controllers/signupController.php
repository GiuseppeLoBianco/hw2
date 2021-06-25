<?php

use Illuminate\Routing\Controller;
use App\Models\User;

class signupController extends Controller{

    public function create(){
        $request = request();
        $user = User::create([
            "username" => $request->username,
            "name" => $request->name,
            "surname" => $request->surname,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);
        if($user){
            Session::put("user_id",$user->id);
            return redirect("home")
                   ->with("user",$user);
        }
        else{
            return redirect("signup")
                ->withInput();
        }
    }

    public function checkUsername($query){
        $exist = User::where("username", $query)->exists();
        return ["exist" => $exist];
    }

    public function checkEmail($query){
        $exist = User::where("email", $query)->exists();
        return ["exist" => $exist];
    }
    
    public function index(){
        return view("signup")->with("csrf_token",csrf_token());
    }

    
}
?>