<?php

if(!auth()){
    header('location: /');
    exit();
}

$kinos= Kino::mine(auth()->id);

view('my-kinos', compact('kinos'));