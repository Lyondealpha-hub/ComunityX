<?php
// this starts a session whenever a user is on the page
session_start();
// connecting to database
$db = new mysqli('localhost','root','','imgdb');
// this if takes the request method which is post from the html
if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
  //when user clicks on the button or submit button then it should process the rest in it
if(isset($_POST['button'])) {
  // get image name from the choose a file
  $file = $_FILES['file']['name'];
  // stores the image into the database
  $insert = "INSERT INTO imgholder(holder)" ."VALUES('$file')";
  // this execute the query and saves it into the database
  mysqli_query($db,$insert);
}
  }
 ?>
