<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function setMenuOpen($route){
    if (request()->route()->name() === $route){
        return "menu-open";
    }
    return ""
}

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
