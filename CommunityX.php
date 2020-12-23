<?php include('Reg_server3.php') ?>
<?php include('Login.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Ahmed ">
    <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
    <title>CommunityX.com</title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="Registration_page.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="full page">
      <div class="nav-bar">
          <h1> CommunityX </h1>
        <ul>

          <form class="Login-Reg"   method="POST" enctype="multipart/form-data">
            <button type="submit" name="login"> Login </button>
            <label for="Index Number"> Index Number</label>
            <input type="text" name="index_number" placeholder="Index Number" >

            <label for="Password">Password</label>
            <input type="Password" name="password" placeholder = "Password" >
            <?php echo $msg; ?>
          </form>
        </ul>

      </div>

      <p>CommunityX helps you Connect with Friends and Family of an Old Institution <br/> And Increases the Stability of Education in a greater peak</p>
<div class="banner">
      <div class="left-column">
<!--        <img src="logo.png" alt="Please Check your Network connections">
        <img src="photo.png" alt="Please Check your Network connections"> -->
        <img src="Schoolcrest.png" alt="">

      </div>
      <div class="right-column">
        <h2><strong>Registration Forum</strong></h2>
        <form action="CommunityX.php" method="post">
    <!--      <div class="alert-error".style.display='none'> <?=  $_SESSION ['message'] ?> </div>-->

          <ul>
            <li>
            <label for="fname">First Name</label>
            <input type="text" name = "firstname" placeholder="First Name" required>
            <label for="lname">Last Name</label>
            <input type="text" name="lastname" placeholder="Last Name" required>
            </li>
      <br/>
      <li>
            <label for="Index No">Index Number</label>
            <input type="numbers" name="index_number" placeholder="Index Number" required>
            <label for="Phone">Phone Number</label>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            </li>
        <br/>

<li>
            <label for="Password">Password</label>
            <input type="password" name="password" placeholder="Password" required>
            <label for="conf">Confirm Password</label>
            <input type="password" name="confirm_password" placeholder="Password" required>
            </li>
<br/>
<li>
        <label> Gender </label>
        <input type="text" name= "gender" placeholder="(OPTIONAL)" list = "gender" required>
        <datalist>
          <option value = "Male">
            <option value="Female">
              <option value = "None"
        </datalist>
        </li>
        <br/>
        <li>
            <h3>Choose an Option below </h3>
            <label>Old Students</label>
            <input type="radio" id = "Old Students" name = "category" value="Old Students" >
            <label>Continuing Students</label>
            <input type="radio" id = "Continuing Students" name = "category" value="Continuingss Students" >
            </li>
          </ul>

          <p> <small> By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy.<br/> You may receive SMS notifications from us and can opt out at any time.<small></p>

          <button class="btn" type="submit" value="reg_user" name="reg-user" >Sign-up </button>

        </form>


      </div>
      </div>

    </div>

  </body>
</html>
