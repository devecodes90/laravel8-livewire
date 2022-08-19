<?php

use Illuminate\Support\Str;

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function setMenuOpen($route){
    $routeAcutel = request()->query->
    if (contains(request()->route()->getName(), $route)){
        return "menu-open";
    }
    return "";
}

function contains($container, $contenu){
   return Str::contains($container, $contenu);
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
