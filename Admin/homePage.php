<!DOCTYPE html>
<html>
<head>
<style>
    body{
        background-color: #fff;
    }
    
.dropbtn {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}
 
.dropdown {
    position: relative;
    display: inline-block;
}
 
.dropdown-content {
    display: none;
    position: absolute;
    background-color: lightgrey;
    min-width: 200px;
    z-index: 1;
}
 
.dropdown-content a {
    color: black;
    padding: 12px 16px;
     text-decoration: none;
    display: block;
}
 
.dropdown-content a:hover {background-color: white;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: grey;}
 
</style>
</head>
<body>
<div class="dropdown">
    &nbsp;<br/><br/>
    &nbsp;&nbsp;&nbsp;<button class="dropbtn"><img src="menu.png" width="48px" height="48px" style="bgcolor:white"></button>
<div class="dropdown-content">
    
<a href="homePage.php">Home</a>
<a href="User.php">Add admins</a>
<a href="Job_Seekers.php">Manage JobSeekers</a>
<a href="Employers.php">Manage Employees</a>
<a href="News.php">News</a>
<a href="Feedback.php">FeedBack</a>
<a href="Logout.php">Log out</a>
</div>
</div>
</body>
</html>