#[macro_use] extern crate rocket;

#[catch(404)]
fn not_found() -> &'static str {
    "Not found!"
}

#[get("/hello")]
fn hello() -> &'static str {
    "Hello, World!"
}

#[get("/hello/<name>")]
fn hello_name(name: String) -> String {
    format!("Hello, {}!", name)
}

#[launch]
fn rocket() -> _ {
    rocket::build().register("/", catchers![not_found]).mount("/", routes![hello, hello_name])
}