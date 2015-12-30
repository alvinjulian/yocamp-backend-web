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
                    <li><a class="selected" href="#">Ticket Sales</a></li>
                    <li><a href="http://my.veritrans.co.idmy.veritrans.co.id">VeriTrans Gateway</a></li>
                    <li><a href="setting.php">Setting</a></li>
                    <li><a href="#">Logout</a></li>
        		</ul>
        	</div>
        	<div class="content">
        		<h1>Dashboard</h1>
        		<p>Here your stuff</p>
        		<div id="box">
        			<div class="box-top">
        				News
        			</div>
        			<div class="box-panel">
        				Yo-Camp Bus Management System<br>
        				Please use it with full responsibility!
        			</div>
        		</div>

        		<div id="box">
        			<div class="box-top-half">
        				Ticket Sales
        			</div>
        			<div class="box-panel-half">
        				<?php
        				//Import PHP Plot
        					require_once('phplot.php');
        					require_once('connection.php');
        					
        					$plot = new PHPlot();
        				?>
        			</div>
        		</div>
        	</div>
        </div>

    </body>
</html>