package main

import (
    "C"
    "fmt"
)

//export print
func print(out *C.char) {
    fmt.Println("[GO print] " + C.GoString(out))
}

//export sum
func sum(a C.int, b C.int) C.int {
    return a + b
}

func main() {}
