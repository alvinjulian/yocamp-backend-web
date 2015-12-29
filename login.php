<html>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <head>
        <title>
            Logging in to Yo-Camp Backend...
        </title>
    </head>
    
    <body>
        <?php
            require_once("connection.php");
            require_once("hashing.php");
            
            if(!$_POST['email'] or !$_POST['password'])
            {
	           die(json_encode(array('success'=>0)));
            }
            
            $email=$mysqli->real_escape_string($_POST['email']);
            $password=$mysqli->real_escape_string($_POST['password']);

            $stmt=$mysqli->prepare("select salt, passhash, id_user, balance from user where email=?");
            $stmt->bind_param('s',$email);

            $stmt->execute();
            $stmt->bind_result($salt,$passhash,$id_user, $balance);
            $stmt->fetch();

            if($passhash!=generateHash($salt,$password))
            {
	           die(json_encode(array('success'=>0)));
            }
            $stmt->close();

        ?>
    </body>
</html>
