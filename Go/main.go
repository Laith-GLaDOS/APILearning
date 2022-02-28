package main

import "net/http"

func main() {
	http.HandleFunc("/hello", func(w http.ResponseWriter, r *http.Request) {
		keys, ok := r.URL.Query()["name"]
		if !ok || len(keys[0]) < 1 {
			w.Write([]byte("Hello, World!"))
		} else {
			w.Write([]byte("Hello, " + keys[0] + "!"))
		}
	})
	http.ListenAndServe(":8000", nil)
}
