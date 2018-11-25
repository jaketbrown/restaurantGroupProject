var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "dbuser",
  password: "goodbyeWorld"
});


/* Database creation function
con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  con.query("CREATE DATABASE mydb", function (err, result) {
    if (err) throw err;
    console.log("Database created");
  });
});
*/



function addUser(name, pass) {
	  con.connect(function(err) {
	  if (err) throw err;
	  console.log("Connected!");
	  con.query("TODO sql query ", function (err, result) {
		if (err) throw err;
		console.log("Database created");
	  });
	});
}

