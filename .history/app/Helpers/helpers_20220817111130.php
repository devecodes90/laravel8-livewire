<?php

function userFullName(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}

function get(){
    return auth()->user()->prenoms . " " . auth()->user()->nom;
}
