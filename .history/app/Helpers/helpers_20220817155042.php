<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function set

function getRoleName(){

    $rolesName = "";
    $i = 0;

   foreach (auth()->user()->roles as $role){
    $rolesName .= $role->nom;

     if ($i < sizeof(auth()->user()->roles) - 1) {
        $rolesName .= ",";
     }
     $i++;


   }
   return $rolesName;
}