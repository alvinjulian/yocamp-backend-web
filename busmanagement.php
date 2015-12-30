<html>
    <head>
        <title>Yo-Camp Backend - Bus Management System</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
        			<li><a class="selected" href="#">Bus Management</a></li>
        			<li><a href="ticketsales.php">Ticket Sales</a></li>
                    <li><a href="http://my.veritrans.co.idmy.veritrans.co.id">VeriTrans Gateway</a></li>
        			<li><a href="setting.php">Setting</a></li>
        			<li><a href="#">Logout</a></li>
        		</ul>
        	</div>
        	<div class="content">
        		<h1>Bus Management</h1>
        		<p>Add, Edit and Delete your Bus Schedule</p>
        		<div id="box">
        			<div class="box-top">
        				Bus List
        			</div>
        			<div class="box-panel">
        				Add or select any bus to edit<br/>
                        <div class="box-date">
                            Start date : <input type="date" name="startdate"> &nbsp &nbsp End date : <input type="date" name="enddate">
                            <div class="date-sub">
                                <input type="submit" class="styled-button-1" value="Search" />
                            </div>
                        </div>
        			</div>
        		</div>
        	</div>
        </div>

    </body>
</html>