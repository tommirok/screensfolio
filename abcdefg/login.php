<?php
   include("connect.php");
   session_start(['cookie_lifetime'=> 20000]);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      //ottaa käyttäjänimen ja salasanan ja parsii ne
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array( $result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
     //tarkistaa oliko haulla tuloksia
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: selectfiles.php");
      }else {
         
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style src="css/mystyle.css">
      </style>
      
   </head>
   
   <body>
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :<br /></label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div id="log4"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>