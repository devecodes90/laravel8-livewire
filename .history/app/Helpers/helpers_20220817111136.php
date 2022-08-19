<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getRoleN(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}
