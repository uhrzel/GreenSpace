<?php
session_start(); // Start the session
unset($_SESSION['user_email']);
   
echo "<script>window.location.href='../index';</script>"; 
?>
