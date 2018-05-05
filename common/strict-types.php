<?php
declare(strict_types=1);

function add(int $a, int $b): int {
    return $a + $b;
}
//php 7+ uncaught type error
$three = add('1', 2);