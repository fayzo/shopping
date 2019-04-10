<?php 
include '../db.php';
session_start();

if (isset($_SESSION['key'])) {
    header('../admin.php');
    exit();
}
 if (isset($_POST['key']) == 'login') {
    
    $username = $db->real_escape_string($_POST['username']);
    $email = $db->real_escape_string($_POST['email']);
    $password = $db->real_escape_string($_POST['password']);

    $sql= $db->query("SELECT login_id ,color FROM login WHERE username ='{$username}'and password='{$password}' or email ='{$email}'and password='{$password}' ");
    $row= $sql->fetch_assoc();
    if ($sql->num_rows > 0) {
        $_SESSION['key'] = $row['login_id'];
        $_SESSION['username'] = $username;
        exit ('<p style="color:green;">success</p>');
    }else{
        exit ('<p style="color:red;">incorrect input try again</p>');
    }
  } 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->
    <title>Signin Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../dist/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="Username" class="form-control mb-3" placeholder="Username" >

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control mb-3" placeholder="Email address">

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" id="inputPassword" class="form-control" placeholder="Password" >

        <div class="checkbox mb-3">
           <label>
             <input type="checkbox" value="remember-me"> Remember me
           </label>
        </div>
      <button class="btn btn-lg btn-primary btn-block" onclick="manage('login')" type="button">Sign in</button>
       <div class="mt-2 h4" id='response'></div>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    

    <script src="../dist/js/jquery.min.js"></script>
    <script src="../dist/js/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
<script>
  function manage(key){
      var username = $("#Username");
      var email = $("#inputEmail");
      var password = $("#inputPassword");
       //   use 1 or second method to validaton
     if (isEmpty(username) && isEmpty(email) && isEmpty(password) ) {
    //    alert("complete register");
       $.ajax({
           url: "login_shopping.php",
           method: "POST",
           dataType: "text",
           data:{ 
               key: key,
               username: username.val(),
               email: email.val(),
               password: password.val(),
           }, 
           success: function(response){
               $("#response").html(response);
                console.log(response);
                if (response.indexOf('success') >= 0 ) {  
                    window.location = '../admin.php';
               }else{
                   isEmptys(username) || isEmptys(email) || isEmptys(password) ;
               }
             }
       });
    }
}
function isEmpty(caller){
   if (caller.val() =="") {
      caller.css("border","1px solid red");
      return false;
    }else{
         caller.css("border","1px solid green");
    }
      return true;
}

function isEmptys(caller){
   if (caller.val() !="") {
      caller.css("border","1px solid red");
      return false;
    }
      return true;
}
</script>
</body>
</html>