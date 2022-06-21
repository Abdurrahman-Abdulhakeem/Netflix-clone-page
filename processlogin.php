
<?php
/* 
We include the connection parameters from our connect.php file which allow us to access the database.
Then we create variables from each value that was submitted from the form */
require_once 'connect.php';
  $email=$_POST["email"];
  $pass=$_POST["pass"];

//with PDO, always use a try catch for better error handling.
try{
	$dbh = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
	}
catch (PDOException $e){
	echo $e->getMessage();
	}
/*
Here we prepare our INSERT statement and then execute that statement. Note that the execution of the query is a 2 part process. First, we prepare the statement and then we explicitly execute it.
Also, here I am simply echoing that the record was added successfully.
*/
$sth = $dbh->prepare("select id from topss where Email='$email' and  Password='$pass'");

if ($sth->execute()){
    header("location:home.php");
}
else{
    echo "Wrong Email or Password";
}
/*
This next line is PDO's unique way of closing the database connection. Make sure that you note is is simply setting your connection variable to null.
*/
$dbh =null;
?>
