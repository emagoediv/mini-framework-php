<?php

function dd($parans = [], $die = true) {
    echo '<pre>';
    print_r($parans);
    echo '</pre>';

    if ($die) die();
}