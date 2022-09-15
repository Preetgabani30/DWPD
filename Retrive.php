<?php
  session_start();
 if(isset($_POST['submit']))
 {
  $sr=$_POST['fname'];
  $_SESSION['sr']=$sr;
  echo "Your name is : ".$_SESSION['sr'];
 }
?>