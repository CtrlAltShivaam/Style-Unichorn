<?php
@include 'connection.php';
session_start();

if(isset($_POST['login']))
{
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);

   $select = " SELECT * FROM registration WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) == 1)
   {
        $row = mysqli_fetch_assoc($result);
        if($row['usertype'] == 'admin')
        {
            $_SESSION['admin_name'] = $row['firstname'];
            header('location:/Dashboard/admin_index.php');
        }
        elseif($row['usertype'] == 'user')
        {
            $_SESSION['user_name'] = $row['firstname'];
            header('location:index.php');

        }
        else
        {
            $error[] = 'Incorrect Email or Password';
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
    <link rel="stylesheet" href="log_style.css">
    <title>Login</title>
</head>
<body>
    <div class="form">
        <h1 class="text-center">Login</h1>
        <form action="" method="$_POST">
         <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
             ?>
            <div class="form-group was-validated">
                <label class="form-lebel" for="email">Email Address</label>
                <input class="form-control" name="email" type="email" id="email" placeholder="example@gmail.com" required>
                <div class="invalid-feedback">
                    Please enter your email address...              
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-lebel" for="password">Password</label>
                <input class="form-control" name="password" type="password" id="password" placeholder="********" required>
                <div class="invalid-feedback">
                    Please enter your password...              
                </div>
            </div>
            <input class="btn btn-success w-100" name= "login" type="submit" value="Sign In">
        </form>
       <h4 class="text-center">Or Login with</h4> 
        <div class="icon">
            <button><i class="bi bi-google"></i></button>
            <button><i class="bi bi-facebook"></i></button>
            <button><i class="bi bi-telephone"></i></button>
        </div>
        <h4 class="text-center">Don't have account?</h4>
        <a href="reg.php"><input class="btn btn-success w-100" type="submit" value="Sign Up"></a>
    </div>
</body>
</html>