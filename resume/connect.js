var mysql = require("mysql");
const express = require("express");
const bodyParser = require("body-parser");
const encoder = bodyParser.urlencoded();
const app = express();
app.use(bodyParser.urlencoded({ extended: true }));

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "resume_builder",
  port: 3306
});
//connect to database

con.connect(function (error) {
  if (error) {
    throw error;
  } else {
    console.log("connected to database successfully");
  }
});
app.get("/", function (req, res) {
  res.sendFile(__dirname + "/.LogIn.html");
});
app.post("/index.html", encoder, function (req, res) {
  var username = req.body.username;
  var password = req.body.password;

  con.query(
    "select * from signup where username = ? and password = ?",
    [username, password],
    function (err, result, fields) {
      if (result.length > 0) {
        res.redirect("/index.html");
      } else {
        res.redirect("/");
        console.log(result);
      }
      res.end();
    }
  );
});
//when login is success
app.get("/index.html", function (req, res) {
  res.sendFile(__dirname + "/index.html");
});


// const btn = document.querySelector("btn_sub");

// btn.addEventListener("click", function () {
//   exampleInputEmail1.style.color = "blue";
// });

//set app port
app.listen(4000);
