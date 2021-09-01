<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTRATION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

<style type="text/css">
  @media screen and (max-width: 500px) {
          .bgimage{
            width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
            justify-content: space-around;
            display: flex;
            
            }
          }
        @media only screen and (min-width:0px) and (max-width:480px){
        .bgimage{
            width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
            justify-content: space-around;
            display: flex;
            overflow-wrap: break-word;
          }
        }
        
        @media only screen and (min-width: 481px) and (max-width: 767px){
          .bgimage{
            width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
            justify-content: space-around;
            display: flex;
            
          }
        }
      
        @media only screen and (min-width: 768px) and (max-width: 1024px){
          .bgimage{
            width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
            justify-content: space-around;
            display: flex;
            
          }
        }

        

</style>

</style>


<body>

<!-- Navbar begins -->

<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: rgb(0, 188, 212);box-shadow: 2px 2px 2px 2px  #888888;">
  <a class="navbar-brand" href="#" style="font-size: 30px;"><b>AAROGYA</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div  class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item ">
        <a class="nav-link" href="index.html" style="font-size: 28px;">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="registration.html" style="font-size: 28px;">Register</a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="login.html" style="font-size: 28px;">Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.html" style="font-size: 28px;">Contact Us</a>
      </li>

    </ul>
  </div>

</nav>

<!-- Navbar ends -->

<form action="register.php" method="post">
<br>
<section style="margin: 30px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <img  class="bgimage img-responsive" src="./images/slogan.jpg"  style="float:left; width: 400px;height: 600px;margin-top: 20px;">
      <div  class="col-md-12 col-lg-6 col-sm-12 col-xs-12" style="float:right;margin: 40px;">
        <h2 class="text-left">Register Now!</h2>
      <p class="text-left">Already have an account?<a href="login.html">Login Now!</a> </p>
      <br>
      <label for="username">User Name</label>
        <input type="text" class="form-control" name="username" placeholder="Enter User Name" required>
      <br>
      
      <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter E-Mail" required>
      <br>
      <label for="password">password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
      <br>
      <label for="phone">phone Number</label>
      <input type="tel" class="form-control" pattern="[6-9]{1}[0-9]{9}" name="phone" placeholder="Enter Phone Number" required>
      <br>
      <label for="gender">Gender</label>
      <br>
      <input type="radio" id="male" name="gender" value="Male"/>
      <label for="male">Male</label><br>
      <input type="radio" id="female" name="gender" value="Female"/>
      <label for="female">Female</label><br>
      <input type="radio" id="not to specify" name="gender" value="n"/>
      <label for="not to specity">Not to specify</label>
<br>
      <label for="age">Age</label>
      <input type="Number" class="form-control"  name="age" placeholder="Enter Age" required />
      <br>
     
      <label>Choose Category</label>
      <br>
      <input type="radio" id="patient" name="category" value="Patient">
      <label for="patient">Patient</label><br>
      <input type="radio" id="doctor" name="category" value="Doctor">
      <label for="doctor">Doctor</label><br>
      <br>

  
 
  <br>

         <input style="font-size: 22px;color: white;background-color:  rgb(0, 188, 212);width: 150px;box-shadow: 2px 2px 2px 2px  #888888;" id="submitbutton" name="insert" type="submit" value="Register">

     
          </div>
        </div>
    </div>
</div>
</section>
</form>
<br>
<br>
<br>

<div style="background-color: rgb(0, 188, 212);text-align: center;padding: 10px;">
  <h2 style="margin: 15px;">AAROGYA</h2>
  <p>All Rights Reserved @2021</p>
</div>

</body>
</html>





