<?php

// The environment variable SYMFONY_ENV MUST be set
if (false === ($env = getenv('SYMFONY_ENV'))) {
//    header("HTTP/1.0 500 Internal Server Error");
//    echo "Internal Server Error. Missing environment configuration.";
//    exit;

    // meh, just default to "dev" for now
    $env = 'dev';
}

require 'app_' . $env . '.php';
