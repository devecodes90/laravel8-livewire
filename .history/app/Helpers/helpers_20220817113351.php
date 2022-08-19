<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getRoleName(){
    $rolesName = "";
    $i = 0;
   foreach (auth()->user()->roles as $role){
    $rolesName = $role->nom;
     if ($i == sizeof($rolesName)) {
        # code...
     }
   }
}
