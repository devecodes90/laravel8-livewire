<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getRoleName(){
    $roleName = "";
   foreach (auth()->user()->roles as $role){}
}
