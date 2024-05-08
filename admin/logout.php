<?php
session_start(); // Start the session
unset($_SESSION['adminloggedin']);

echo "<script>window.location.href='../index';</script>";
