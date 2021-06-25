<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


Class Preferiti extends Model{

    protected $table = "preferiti";
    public $timestamps = false;

    protected $fillable = [
        "title", "img", "descr","id_utente",
    ];

    public function user(){
        return $this->belongsTo("App\Models\User");
    }
    
}

?>