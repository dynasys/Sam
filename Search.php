<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CS Connect</title>
    <link rel="stylesheet" href="temp.css">
</head>
<body>
    <header>
        <img src="newSeal.png" alt="Florida State University Seal" width="189" height="81">
    </header>
    
    <nav>
        <ul>
            <li><a href="home.htm" title="Home" class="main">Home</a></li>
            <li><a href="profileView.htm" title="Profile" class="main">Profile</a></li>
            <li><a href="search.htm" title="Jobs" class="main">Jobs</a></li>
            <li><a href="" title="Alerts" class="main">Alerts</a></li>
            <li><a href="" title="Settings" class="main">Settings</a></li>
        </ul>
    </nav>

    <div id="cover">
    
        <div id="infobar">
            Welcome, Paul - Nieto <a href="" title="Logout" class="logout">Logout</a>
        </div>
    
        <form method="post" action='' id="search_box" class='search'>
            <span>Keywords:</span>
            <input type="text" name="keywords" placeholder="subbable" id='keywords'>
            <label for="internship">Internship</label>
            <input type="radio" name="type" id="internship" value="internship">
            <label for="Job">Job</label>
            <input type="radio" name="type" id="job" value="job">
            <br>
            Location- <br>
            Zip: 
            <input type="text" name="zip" id='zip'>
            <br>
            City:
            <input type="text" name="city" id='city'>
            <input type="Submit" value="Search" name="Search">
			
			<?php
			include 'SearchDraft.php'
			?>
			
        </form>
        
        <div id="results"></div>
            
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
