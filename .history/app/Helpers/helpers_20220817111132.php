<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function getR(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}
