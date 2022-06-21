<?php

function str_starts_with ( $haystack, $needle ) {
    return strpos( $haystack , $needle ) === 0;
}

spl_autoload_register(static function (string $className) {
    $root = "shapes\\";
    if (str_starts_with($className, $root)) {
        $filePath = substr($className, strlen($root));
        require_once __DIR__ . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR .
            str_replace("\\", DIRECTORY_SEPARATOR, $filePath) . ".php";
    }
});
