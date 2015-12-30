<html>
    <!-- 
        Log in script
        Alvin Julian <alvin.julian@outlook.com>
    -->
    <head>
        <title>
            Logging in to Yo-Camp Backend...
        </title>
    </head>
    
    <body>
        <?php
            require_once("connection.php");
            //require_once("hashing.php");
            
            if(!$_POST['email'] or !$_POST['password'])
            {
	           die(json_encode(array('success'=>0)));
               header("location: index.php");
                exit();
            }
            
            $email=$mysqli->real_escape_string($_POST['email']);
            $password=$mysqli->real_escape_string($_POST['password']);

            $stmt=$mysqli->prepare("select passhash from user_admin where username=?");
            $stmt->bind_param('s',$email);

            $stmt->execute();
            $stmt->bind_result($passhash);
            $stmt->fetch();
            if($passhash!=$password)
            {
                header("location: index.php");
                exit();
            }
            else
            {
                header("location: dashboard.php");
                exit();
            }
            $stmt->close();
        ?>
    </body>
</html>
