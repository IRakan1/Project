<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  mysql_connect('localhost','root','');
  mysql_select_db('test_db');
  $select=mysql_query("update users set password='$pass' where email='$email'");
}
?>