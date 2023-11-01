<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><a href="Database_view.php">Database view</a></h1>
<?php
    session_start();
    $error = '';
    $connections = mysqli_connect('localhost','root','','users');
    if(!$connections){
        die("Database connection not successfull.".mysqli_error());
    }
    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
    $query = "SELECT * FROM member WHERE username = '$username' && password = '$password' ";
    $connect_query = mysqli_query($connections,$query);
    $count = mysqli_num_rows($connect_query);
    if($count==true){
        $row = mysqli_fetch_assoc($connect_query);
        $role = $row['role'];
        $_SESSION['role'] = $role;
        header("location: homefile.php");
    }else{
        $error = 'please enter correct login details.';
    }
    }
    ?>
    <div class="login_from">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h1>Register :</h1>
                    <form method="post">
                        <div class="mb-3">
                            <label for="exampleInputname1" class="form-label">Username :</label>
                            <input type="text" class="form-control" id="exampleInputname1" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password :</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        <?php echo "<span>$error</span>"; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>