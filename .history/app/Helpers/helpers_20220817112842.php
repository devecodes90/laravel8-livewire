<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getRoleName(){
    $rolesName = "";
    $i
   foreach (auth()->user()->roles as $role){
    $rolesName = $role->nom;
   }
}
