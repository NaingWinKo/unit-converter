
<?php
require ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-800">
<div class="flex h-screen items-center justify-center">
  <div class="h-80 w-80 rounded-2xl p-9 shadow-2xl shadow-gray-600 bg-blue-200">
  <form action="" method="post"> 

  <input type="text" name="uname" class="roun mb-3 rounded-lg bg-gray-200 p-2 px-4" placeholder="Enter user name" />
    <input type="text" name="email" class="roun mb-3 rounded-lg bg-gray-200 p-2 px-4" placeholder="Enter Email " />
    <input type="password" name="password" class="roun mb-3 rounded-lg bg-gray-200 p-2 px-4" placeholder="Password" />
    <input type="password" name="com_password" class="roun mb-3 rounded-lg bg-gray-200 p-2 px-4" placeholder="Comfirm Password" />
    <div class="flex space-x-4 px-4">
        <button class="rounded-xl w-full bg-gray-200 p-2 px-4 font-serif text-gray-800" type="submit" name="login" >Register</button>
        <button class="rounded-xl w-full bg-gray-200 p-2 px-4 font-serif text-gray-800" type="submit" name="back" >Back</button>
    </div>

  </form>
  </div>
</div>

</body>
</html>
<?php
  if(isset($_POST['login'])){
   $username = $_POST['uname'];
    $email =$_POST['email'];
   $password = $_POST['password'];
   $password2 = $_POST['com_password'];
    if(!empty($username) && !empty($email) && !empty($password) && !empty($password2) &&  $password == $password2){

   $query = "INSERT INTO register(name,email,password) VALUES ('$username','$email','$password')";
   $result = mysqli_query($connection, $query);
   if($result){
    header("location:login.php");
   }
   

  }
  }
?>
<?php
if(isset($_POST["back"])){
header("location:login.php");
}
?>