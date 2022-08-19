<?php

use Illuminate\Support\Str;

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function setMenuClass($route, $classe){
    $routeAcutel = request()->route()->getName();

    if (contains($routeAcutel,$route)){
        return $classe;
    }
    return "";
}

function setMenuActive($route){
    $routeAcutel = request()->route()->getName();

    if ($routeAcutel == $route){
        return "active";
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
