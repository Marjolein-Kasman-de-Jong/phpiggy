<?php

declare(strict_types=1);

// Dump value and die
function dd(mixed $value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre";

    die();
}