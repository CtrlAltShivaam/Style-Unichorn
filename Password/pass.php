<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Forget</title>
</head>
<body>
    <div class="form">
        <h1 class="text-center">Forgot Your Password?</h1>
        <form>
            <div class="form-group was-validated">
                <p>We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                <label class="form-lebel" for="email">Email Address</label>
                <input class="form-control" type="email" id="email" placeholder="Enter Email Address" required>
                <div class="invalid-feedback">
                    Please enter your email address...              
                </div>
            </div>
        </form>
        <a href=""><input class="btn btn-success w-100" type="submit" value="Reset Password"></a>
    </div>
</body>
</html>