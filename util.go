package main

import (
    "C"
    "fmt"
    "net/http"
    "io/ioutil"
)

//export print
func print(out *C.char) {
    fmt.Println("[GO print] " + C.GoString(out))
}

//export sum
func sum(a C.int, b C.int) C.int {
    return a + b
}

//export httpGet
func httpGet(url string) *C.char {
    resp, err := http.Get(url)
    if err != nil {
    	panic(err)
    }

    defer resp.Body.Close()

    body, err := ioutil.ReadAll(resp.Body)
    if err != nil {
    	panic(err)
    }

    return C.CString(string(body))
}

func main() {}
