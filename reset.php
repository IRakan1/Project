<!DOCTYPE html>
<html>
<head>
	<title>Reset password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="send_link.php" method="post">
     	<h2>Reset password</h2>
     	
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>
         <label>New password</label>
         <input type="text" name="email">
      <input type="submit" name="submit_email">
      <button type="submit"><a href="main.html">Home</a></button>

    

		 
     </form>
     </body>
</html>
    

<?php
/* if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];
  mysql_connect('localhost','root','');
  mysql_select_db('sample');
  $select=mysql_query("select email,password from user where md5(email)='$email' and md5(password)='$pass'");
  if(mysql_num_rows($select)==1)
  {
    ?>
    <form method="post" action="submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
?>
