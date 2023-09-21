let email=document.getElementById("exampleInputEmail1").value;
let pass=document.getElementById("exampleInputPassword1").value;

con.query(
    "select * from signup where username = ? and password = ?",
    [username, password],
    function (err, result, fields) {
      if (result.length > 0) {
        res.redirect("/ContactUs.html");
      } else {
        res.redirect("/");
        console.log(result);
      }
      res.end();
    }
  );

