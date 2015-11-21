<!--<?php
 session_start();
    if(!isset($_SESSION['username'])){
    header("Location:Login.php");
    }
?>-->
<!--?php include "logout.php" ?>-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CS Connect</title>
    <link rel="stylesheet" href="newStyles.css">
    <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        table#t01 tr:nth-child(even) {
            background-color: #eee;
        }
        table#t01 tr:nth-child(odd) {
            background-color:#fff;
        }
        table#t01 th	{
            background-color: #782f40;
            color: white;
        }
    </style>    
</head>
<body>
    <header>
        <img src="newSeal.png" alt="Florida State University Seal" width="189" height="81">
    </header>
    
    <nav>
        <ul>
            <li><a href="" title="Home" class="main">Home</a></li>
            <li><a href="adminPasswordChange.php" title="Settings" class="main">Settings</a></li>
        </ul>
    </nav>

    <div id="cover">
    
    <div id="infobar">
        Welcome, Administrator
        <a href="logout.php" title="Logout" class="logout">Logout</a>
    </div>
        
    <div id="feed">
          
        <table id="t01">
            <caption><h2>Companies Needing Approval</h2></caption>
            <tr>
                <th>Company</th>
                <th>Contact</th>		
                <th>Phone</th>
                <th>Email</th>
				<th>Company Info</th>
                <th>Option</th> 
            </tr>
            
            <?php include "adminApprovalListScript.php" ?>
            
        </table>
          
    </div>
    
    <!--<div id="profileInfo">
		?php include "compInfoScript.php" ?>
		
        Paul - Nieto
        <br>
        Junior, Graduating Apr 2017 <br>
        Computer Science
        <br>
        pn13b@my.fsu.edu <br>
        resume last updated: tuba <br>
        <br>
        profile completion <br>
        enter bar here
    </div>-->
        

    
    <div id="links">
        <ul id="otherlist">
            <li><a href="" title="CS Homepage" class="navaway">CS Homepage</a></li>
            <li><a href="" title="Systems Group" class="navaway">Systems Group</a></li>
            
        </ul>
    </div>
        
    <div class="clearfix"></div>
        
    </div>
    
    <footer>
        <br>
        © 2015 Florida State University <br>
        600 W. College Avenue <br>
        Tallahassee, FL 32306 <br>
    </footer>
        
</body>
</html>
