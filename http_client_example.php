<?php

// this function taken from https://blog.claudiupersoiu.ro/2019/12/23/a-bit-of-php-go-ffi-and-holiday-spirit/lang/en/
function stringToGoString($ffi, $name) {
    $strChar = str_split($name);

    $c = FFI::new('char[' . count($strChar) . ']', false);
    foreach ($strChar as $i => $char) {
        $c[$i] = $char;
    }

    $goStr = $ffi->new("GoString");
    $goStr->p = FFI::cast(FFI::type('char *'), $c);
    $goStr->n = count($strChar);

    return $goStr;
}

$ffi = FFI::cdef(
    "typedef struct { char* p; long n } GoString;
    char* httpGet(GoString url);",
    __DIR__ . "/libutil.so"
);

$url = stringToGoString($ffi, "http://httpbin.org/headers");

echo FFI::string($ffi->httpGet($url));

