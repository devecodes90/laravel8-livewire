<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getRoleName(){
    $role
   foreach (auth()->user()->roles as $role){}
}
