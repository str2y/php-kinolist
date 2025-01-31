<?php

$kinos = Kino::all($_REQUEST['search'] ?? '');

view('index', compact('kinos'));
