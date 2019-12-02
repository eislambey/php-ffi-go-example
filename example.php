<?php

$util = FFI::cdef(
    "void print(char* p0);
    int sum(int p0, int p1);",
    __DIR__ . "/libutil.so"
);

$util->print(
    (string) $util->sum(2, 4)
);
