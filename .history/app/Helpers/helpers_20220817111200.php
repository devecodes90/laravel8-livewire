<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getRoleName(){
   foreach ($this->roles as $role)
}