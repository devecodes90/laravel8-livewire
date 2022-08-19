<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getRoleName(){
    $rolesName = "";
   foreach (auth()->user()->roles as $role){
    $rolesName = $role->nom;
   }
}
