# PHP FFI GO Example
Just tried to call GO functions from PHP via FFI.

## How to run?

Make sure you have `PHP 7.4` and `ffi.enable=true` in your `php.ini`.

### Clone this repository.

    git clone https://github.com/eislambey/php-ffi-go-example.git

### Build libutil.so

    go build -o libutil.so -buildmode=c-shared util.go

### Run

    php example.php
    
    php http_client_example.php

## References

- [PHP: FFI - Manual](https://www.php.net/manual/en/book.ffi.php)
- [Creating shared libraries in Go](http://snowsyn.net/2016/09/11/creating-shared-libraries-in-go/)
- [A bit of PHP, Go, FFI and holiday spirit](https://blog.claudiupersoiu.ro/2019/12/23/a-bit-of-php-go-ffi-and-holiday-spirit/lang/en/)