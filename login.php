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
<body class = "bg--400">

  <div class ="flex items-center justify-center p-5"><img src="ucsh.jpg";></div>

<div class="flex mt-56 justify-center">
  <div class="h-80 w-80 rounded-3xl p-9 shadow-2xl shadow-rose-500 bg-slate-400 justify-center">
  <form action="login.php" method="post"> 
    <!-- <div class = "bg-login text-center">
      <div class="bg-login-overlay></div>
    </div> -->
    <div class="position-relative">
    <h4 class="bg-sky-200 text-2xl rounded-2xl text-center">Welcome Back !</h4>
    <h5 class="mb-0 text-center p-2 text-blue-700">Sign in to Unit Converter</h5>
    </div>

  <input type="text " name="lname" class="roun mb-3 rounded-lg bg-gray-200 p-2 px-4" placeholder="Enter user name" />
    
    <input type="password" name="lpassword" class="roun mb-3 rounded-lg bg-gray-200 p-2 px-4" placeholder="Password" >
    <div class="flex space-x-4 px-2">
        <button class="rounded-xl w-full bg-gray-200 p-2 px-4 font-serif text-gray-800 hover:bg-green-300 active:bg-red-400 focus:ring-violet-300" type="submit" name="login1" >Login</button>
        <button class="rounded-xl w-full bg-gray-200 p-2 px-4 font-serif text-gray-800 hover:bg-green-300 active:bg-red-400 focus:ring-violet-300" type="submit" name="register" >Register</button>
         <!--
         focus:outline-none focus:ring focus:ring-violet-300 -->

    </div>
    
  </form>
  </div>
</div>

</body>
</html>
<?php
if(isset($_POST['login1'])){
    $lname = $_POST['lname'];
    $lpassword = $_POST['lpassword'];

    $lquery = "SELECT * FROM register WHERE name='$lname' AND password ='$lpassword'";
    $lresult = mysqli_query($connection, $lquery);
    $num = mysqli_num_rows($lresult);
    if($num != 0){
     header("location:next.php");
}
else{
die('error is'.mysqli_error($connection));
}
}


?>
<?php
if(isset($_POST['register'])){
    header('location:register.php');
}
?>