<?php
// this starts a session
session_start();
// connecting to a database
$con = new mysqli("localhost","root","","communityx");
//taking from the post server
$display=''; // mentioning this varible as a global varible so it can be afftect well in index.php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  // when user press the upload button do whats it says
  if(isset($_POST['Upload'])== 1){
    //taking from this file which is the image selected
    $file = $_FILES['image']['name'];
    //....................................................................................................................
    // i think here i will name a variable which function to pick and post pics from root system // going to work on this
    //....................................................................................................................
    //inserting the image selected into a database
    $insert = "INSERT INTO blogpost(image)" ."VALUES('$file')";
    //executing the command and making it save in the database
    if($executor= mysqli_query($con,$insert)){
      // when image is saved fetch it at the same time, ready to display iit

      $fetch = "SELECT image FROM blogpost ORDER BY id DESC";
    $result = mysqli_query($con, $fetch);
      $display = mysqli_fetch_all($result, MYSQLI_ASSOC);
      /*print_r($display);*/

    }else {

    }

  }
}


 ?>
