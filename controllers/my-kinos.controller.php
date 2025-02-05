<?php

if(!auth()){
    header('location: /login');
    exit();
}

$kinos= Kino::mine(auth()->id);

view('my-kinos', compact('kinos'));