<html>
    <head>
        <title>Yo-Camp Backend - Bus Management System</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
    
    <body>

        <div id="header">
        	<div class="logo"><a href="#">Yo-Camp <span>Backend - Bus Management System</span></a></div>
        </div>

        <div class="mobile">
        	
        </div>

        <div id="container">
        	<div class="sidebar">
        		<ul id="nav">
        			<li><a href="dashboard.php">Dashboard</a></li>
        			<li><a href="busmanagement.php">Bus Management</a></li>
        			<li><a href="ticketsales.php">Ticket Sales</a></li>
        			<li><a href="http://my.veritrans.co.id">VeriTrans Gateway</a></li>
        			<li><a class="selected" href="#">Setting</a></li>
        			<li><a href="#">Logout</a></li>
        		</ul>
        	</div>
        	<div class="content">
        		<h1>Setting</h1>
        		<p>Change your password, Add user accounts</p>
        		<div id="box">
        			<div class="box-top">
        				Change your password
        			</div>
        			<div class="box-panel">
        				<form action="changepassword.php" method="POST">
                            <div class="labelChangePass">
                                Current password : <br>
                                <input type="password" name="currentpassword"> <br>
                                Enter new password : <br>
                                <input type="password" name="newpassword"> <br>
                                Confirm new password : <br>
                                <input type="password" name="confirmpassword"> <br><br>
                                <input type="submit" class="styled-button-1" value="Change my password">
                            </div>
                        </form>
        			</div>
        		</div>

                <div id="box">
                    <div class="box-top">
                        Create new account
                    </div>
                    <div class="box-panel">
                        <form action="addaccount.php" method="POST">                        
                            <div class="box-addaccount">
                                Name : <br>
                                <input type="text" name="name"> <br>
                                Email : <br>
                                <input type="email" name="email"> <br>
                                Password : <br>
                                <input type="password" name="password"> <br>
                                Confirm password : <br>
                                <input type="password" name="confirmpasswordnewacc"> <br><br>
                                <input type="submit" class="styled-button-1" value="Create new account">
                            </div>
                        </form>
                    </div>
                </div>
        	</div>
        </div>

    </body>
</html>