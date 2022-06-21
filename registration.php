<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Netflix Clone Page</title>
</head>
<body>
    <section class="showcase3">
        <header class="top">
            <h1 class="logo">NETFLIX</h1>
            <a href="sign-in.php" class="login2">Sign In</a>
        </header>
        <div class="pas">
            <h2>Create a password to start <br> your membership.</h2>
            <p>Just  a few more steps and you're done! <br> We hate paperwork, too.</p>
           
            <form name="myform" onSubmit="return validate()" method="POST" action="process.php" class="reg">
                <input type="text" name="fname" placeholder="Firstname"/>
                <input type="text" name="lname" placeholder="Lastname"/>
                <input type="text" name="mail" placeholder="Email"/>
                <input type="password" name="pass" placeholder="Add a password"/>
                <div class="check"><input type="checkbox"/> Please do not email me Netflix special offers.</div>
                <div class="set"> 
                    <input type="submit" value="Next"/>
            </div>
            </form>
        </div>
    </section>
    <script>
        function validate(){
            var fname = document.forms["myform"]["fname"].value;
            var lname = document.forms["myform"]["lname"].value;
            var name = document.forms["myform"]["mail"].value;
            var pass2 = document.forms["myform"]["pass"].value;
            if(fname=="" || fname==null){
                alert("Enter Firstname");
                return false;
            }
            if(lname=="" || lname==null){
                alert("Enter lastname");
                return false;
            }
            if(name=="" || name==null){
                alert("Email is required");
                return false;
            }
            if(pass2=="" || pass2==null){
                alert("Enter password");
                return false;
            }
        }
    </script>
</body>
</html>