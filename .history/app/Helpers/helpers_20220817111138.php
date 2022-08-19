<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getRoleNma(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}
