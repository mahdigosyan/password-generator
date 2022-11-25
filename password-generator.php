#!/usr/bin/env php
<?php

/**
 * Return the matching argument name, or false on failure.
 *
 * @param array $arguments
 * @param string $name
 * @return string|false
 */
function argument(array $arguments, $name)
{
    foreach ($arguments as $argument) {
        $items = explode('=', $argument);
        if (isset($items[1]) && $items[0] === '--' . $name) {
            return $items[1];
        }
    }

    return false;
}

/**
 * Return a valid length, setting the default if required.
 *
 * @param int $length
 * @return int
 */
function length($length)
{
    if (0 === $length) {
        $length = 12;
    }

    return $length;
}

/**
 * Generate a password string.
 *
 * @param string $characters
 * @param int $length
 * @return string
 */
function generatePassword($characters, $length)
{
    $password = [];
    $charactersLength = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $key = rand(0, $charactersLength);
        $password[] = $characters[$key];
    }

    return implode($password);
}

$length = (int)argument($argv, 'length');
$length = length($length);

$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';

echo generatePassword($characters, $length) . PHP_EOL;
