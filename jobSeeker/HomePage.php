<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            
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
 
            html{
                scroll-behavior: smooth;
            }
        .style1 {
	color: #E74292;
	font-weight: bold;
        
}
.style2 {
	font-size: medium;
	font-weight: bold;
}
.style3{
    color: #487EB0;
}
</style>
    </head>
    <body>
        
            <?php
            session_start();
            echo '<marquee direction="left" behaviour="scroll" class="style3"><h1 class="style1">Welcome '.$_SESSION['Name'].'</h1></marquee>' ?>
<table width="100%" border="0">
                  <tr>
      <td><div align="center"><a href="Profile.php"><img src="design/Profile.png" alt="" width="50" height="50" /><br/><strong>Profile</strong></a></div></td>
                      
      <td><div align="center"><a href="Education.php"><img src="design/Edu.png" alt="" width="50" height="50" /><br/><strong>Education</strong></a></div></td>


      <td><div align="center"><a href="SearchJob.php"><img src="design/Search.png" alt="" width="50" height="50" /><br/><strong>Search JOB</strong></a></div></td>
		
      
      <td><div align="center"><a href="Walkin.php"><img src="design/Interview.png" alt="" width="50" height="50" /><br/><strong>Walkin</strong></a></div></td>
             
      
      <td><div align="center"><a href="Feedback.php"><img src="design/Feedback.png" alt="" width="50" height="50" /><br/><strong>Feedback</strong></a></div></td>
             
      
      <td><div align="center"><a href="logout.php"><img src="design/Log.png" alt="" width="50" height="50" /><br/><strong>Logout</strong></a></div></td>
                  
                </tr>
                </table> 
        <?php
        $con = mysqli_connect ("localhost","root","","job1");
        $sql="select * from news_master;";
        $result= mysqli_query($con,$sql);
        
        ?>
        <h2>
        <table align="center" class="tab" border="0" cellspacing="2" cellpadding="10">
            <tr class="style1">
            <td>News</td>
            <td>News Date</td>
            </tr>
            <?php while ($records = mysqli_fetch_array($result)){
                $news=$records['News'];
                $dateN=$records['NewsDate'];     ?>
            <tr>
                <td><?php echo $news; ?></td>>
                <td><?php  echo $dateN;?></td>
            </tr>
        <?php } ?>    
        </table>
        </h2>
        
        
    </body>
</html>