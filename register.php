<?php  
$servername="localhost";
$username="root";
$password="";
$database_name="yummy";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
	die("connection Failed:" . mysqli_connect_error());
}

if(isset($POST['insert']))
{
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $age=$_POST['age'];
  $category=$_POST['category'];

  $sql_query="INSERT into registration(
  username,email,password,phone,gender,age,category) Values ('$username','$email',$password','$phone,'$gender','$age','$category')";
       

         if(mysql_query($conn,$sql_query))
         {
          echo "successfully registered";
         }
         else{
          echo "Error:" . $sql . "" . mysql_error($conn);
          mysql_close($conn);

         }


}


?>