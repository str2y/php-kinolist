<?php

function dd(...$dump)
{
    dump($dump);
    die();
};

function dump(...$dump){
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
}
