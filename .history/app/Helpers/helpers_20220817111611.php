<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getRoleName(){
    $roleNames = 
   foreach (auth()->user()->roles as $role){}
}
