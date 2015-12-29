<html>
<head>
<title>Yo-Camp Backend</title>
<style type="text/css">
    html 
    { 
        background: url(images/main-bg.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    p
    {
        font-family:georgia;
        font-weight:bold;
        font-size:large;
        color:white;
    }
    input[type="email"] 
    {
        padding: 10px;
        border: none;
        border-bottom: solid 2px #c9c9c9;
        transition: border 0.3s;
    }
    input[type="email"]:focus,
    input[type="email"].focus 
    {
        border-bottom: solid 2px #969696;
    }
    input[type="password"] 
    {
        padding: 10px;
        border: none;
        border-bottom: solid 2px #c9c9c9;
        transition: border 0.3s;
    }
    input[type="password"]:focus,
    input[type="password"].focus 
    {
        border-bottom: solid 2px #969696;
    }
    .styled-button-8 
    {
        background: #25A6E1;
        background: -webkit-linear-gradient(#25A6E1 0%, #188BC0 100%);
        background: -o-linear-gradient(#25A6E1 0%, #188BC0 100%);
        background: linear-gradient(#25A6E1 0%, #188BC0 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
        padding:8px 13px;
        color:#fff;
        font-family:'Helvetica Neue',sans-serif;
        font-size:17px;
        border-radius:4px;
        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border:1px solid #1A87B9
    }                                
</style>
</head>

<body>
	
	<center>
		<table>
            <form action="Login.php" method="POST">
            <input type="hidden" name="server_auth" value="YoYoCampusBackendSuperSecretPassword">
			<tr>
				<td colspan=4>
					<img src="images/yocamplogo.png" alt=""/>
                    <br/>
                    <br/>
				</td>
			</tr>
            <tr>
                <td colspan=4>
                   <center><p> Welcome to Yo-Camp Backend! </p></center>
                </td>
            </tr>
            <tr>
                <td colspan=4>
                    <center><p> Please login to Continue </p></center>
                    <br/>
                </td>
            </tr>
            <tr>
                <td colspan=4>
                    <center><input type="email"  name="email" maxlength="25" width="100px" placeholder="username" autofocus></center>
                </td>
            </tr>
            <tr>
                <td colspan=4>
                    <center><input type="password" name="password" maxlength="25" width="100px" placeholder="password" autofocus></center>
                    <br/>
                </td>
            </tr>
            <tr>
                <td colspan=4>
                    <center><input type="submit" class="styled-button-8" value="Login"></center>
                </td>
            </tr>
		</table>
	</center>
</body>
</html>