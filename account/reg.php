<?php
@include 'connection.php';

if(isset($_POST['register'])){

   $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $lasttname = mysqli_real_escape_string($conn, $_POST['lastname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);
   $usertype = $_POST['usertype'];

   $select = " SELECT * FROM registration WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($password != $cpassword){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO registration(firstname, lastname, email, password, usertype) VALUES('$firstname','$lasttname','$email','$password','$usertype')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="reg_style.css">
    <title>Registration</title>
</head>
<body>
    <div class="form">
        <h1 class="text-center">Registration</h1>
        <form action="" method="POST">
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
             ?>
            <div class="name row">
                <div class="form-group was-validated col-6">
                    <label class="form-lebel" for="name">First Name</label>
                    <input class="form-control" type="text" name="firstname" id="name" placeholder="First Name" required>
                    <div class="invalid-feedback">
                        Enter First name...              
                    </div>
                </div>
                <div class="form-group was-validated col-6">
                    <label class="form-lebel" for="name">Last Name</label>
                    <input class="form-control" type="text" name="lastname" id="name" placeholder="Last Name" required>
                    <div class="invalid-feedback">
                        Enter Last name...              
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="form-group was-validated">
                    <label class="form-lebel" for="email">Email Address</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="abc@email.com" required>
                    <div class="invalid-feedback">
                        Enter your email address...              
                    </div>
                </div>
            </div>
            <div class="password">
                <div class="form-group was-validated">
                    <label class="form-lebel" for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                    <div class="invalid-feedback">
                        Enter a password...              
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label class="form-lebel" for="password">Confirm Password</label>
                    <input class="form-control" type="password" name="cpassword" id="password" placeholder="Confirm Password" required>
                    <div class="invalid-feedback">
                        Confirm your password...              
                    </div>
                </div>
            </div>
            <div class="user-type">
                <div class="form-group was-validated">
                    <label for="user-type">User Type</label>
                    <select name="usertype">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
            </div>
            <input class="btn btn-success w-100"  name="register" type="submit" value="Sign Up">
        </form>
       <h4 class="text-center">Or Sign Up with</h4> 
        <div class="icon">
            <button><i class="bi bi-google"></i></button>
            <button><i class="bi bi-facebook"></i></button>
            <button><i class="bi bi-telephone"></i></button>
        </div>
        <h4 class="text-center">Already have an account?</h4>
        <a href="login.php"><input class="btn btn-success w-100" type="submit" value="Login"></a>
    </div>
</body>
</html>