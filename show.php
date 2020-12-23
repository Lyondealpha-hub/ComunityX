<?php

session_start();

// connecting to database
$conn = new mysqli('localhost','root','','communityX');

// this is to pick in the current userinfo from the registration page
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $index_number = $conn->real_escape_string($_POST['index_number']);
// selecting data from database if the index_number is the same as the current index_number
$db = "SELECT firstname FROM registration WHERE index_number == '$index_number'";

// executing statement
$executor = mysqli_query($conn,$db);
//holding the executor and holds the fetch
$show = mysqli_fetch_assoc($executor);
//showing data from database on website
 $show["firstname"];



}
 ?>
