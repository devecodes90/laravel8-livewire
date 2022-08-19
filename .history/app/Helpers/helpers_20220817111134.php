<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getRole(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}
