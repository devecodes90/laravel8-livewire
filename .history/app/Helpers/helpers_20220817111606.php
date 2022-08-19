<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getRoleName(){
    $roleN
   foreach (auth()->user()->roles as $role){}
}
