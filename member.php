<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
<?php

//get values from login.php
if(isset($_POST["Submit"])){
$username=$_POST['user'];
$password=$_POST['pass'];
	
 	
	
//to prevent mysqlinjection
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

//connect to database and select database
$conn=mysql_connect("localhost","root","");
mysql_select_db("Loginusr");

//query the database for user
$result=mysql_query("select username,password,curtime from loginusr where username='$username'and password='$password';",$conn)or die("failed to query database".mysql_error());

}
	?>
	
	 <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
            
                    <th>UserName</th>
                     <th>Password</th>
                    <th>TimeStamp</th>
                    

            </tr>
	</thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_array( $result ) ){
			 echo"<center><h1> Welcome</h1></center>";
			  
            echo
            "<tr>
              <td>{$row['username']}</td>
              <td>{$row['password']}</td>
              <td>{$row['curtime']}</td>
              
            </tr>\n";
          }
        ?>
      </tbody>
	</table>
     <?php mysql_close($conn); ?>
    </body>
    </html>