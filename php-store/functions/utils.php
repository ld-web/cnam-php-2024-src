<?php

function redirect(string $location): never
{
    header('Location: ' . $location);
    exit;
}