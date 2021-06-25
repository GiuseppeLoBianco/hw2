<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/login", "LoginController@index")->name("login");
Route::post("/login", "LoginController@checklogin");

Route::get("/home", "HomeController@index")->name("home");
Route::get("/logout", "LogoutController@logout")->name("logout");

Route::get("/signup", "signupController@index")->name("signup");
Route::post("/signup", "signupController@create");
Route::get("signup/username/{q}", "signupController@checkUsername");
Route::get("signup/email/{q}", "signupController@checkEmail");

Route::get("/preferiti","PreferitiController@index")->name("preferiti");

Route::get("/top", "TopController@mostraTop");

Route::get("/ricerca", "RicercaController@ricerca");

Route::get("/mostrapreferiti","MostraPreferitiController@mostra");

Route::post("aggiungipreferito/aggiungi", "AggiungiPreferitoController@aggiungi");

Route::get("rimuovipreferito/rimuovi/{title}/{id}","RimuoviPreferitoController@rimuovi");

?>