 <?php
// this tracks users on the site
session_start();
include('Login.php');

$_SESSION ['message'] = '';
$msg = "";

// connecting to database

$con = new mysqli('localhost','root','','communityx');
// this is for registation
if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
  //making sure the two passwords are matching
  if($_POST['password'] == $_POST['confirm_password']){
    $firstname = $con->real_escape_string($_POST['firstname']);
    $lastname = $con->real_escape_string($_POST['lastname']);
    $phone = $con->real_escape_string($_POST['phone']);
    $index_number = $con->real_escape_string($_POST['index_number']);
    $gender = $con->real_escape_string($_POST['gender']);
    $password = $_POST['password']; // this encrypts the password

    /*if(strlen($password) < 6){
      $msg ="Password Should contain at 6 characters with atleast one Upper and Lower case";
    }*/  // this would be worked on. it's about the security of length of passwords

    // Inserting values to the database

    $results = "INSERT INTO registration (firstname ,lastname, phone, index_number,gender,password)"
              . " VALUES('$firstname','$lastname','$phone','$index_number','$gender','$password')";
   // if the query is successful redirect to homepage(index.html)
   if($con ->query($results)=== true){
     header('location:Index.php?User Successfully Signed In');

     $_SESSION['firstname'] = $firstname;
     $_SESSION['lastname'] = $lastname;
     exit();


   }else {
     $_SESSION['message'] = 'Registration Failed!, Carefully check your Entry correctly';
     exit();
   }

 }else {
   $_SESSION['message'] = 'Passwords do not Match';
 }

  /*if(isset($_POST['login']){
  $index_number = $con->real_escape_string($_POST['index_number']);
  $passwprd = md5($_POST['password']);

  $db = 'SELECT index_number,password WHERE index_number == '$index_number' AND password == '$password'';
  $result = mysqli_query($con,$db);

  while($row = mysqli_fetch_all($result, MYSQLI_ASSOC)){
  $dbpassword = $row['password'];
  }
  if($dbpassword == $password){
    header('location:Index.php');
    }
  }*/
}

// this is for logging in
// This isn't working probably need to work on the check and fetch resylts from a database









 ?>
