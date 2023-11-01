<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1><a href="login.php">Go to Login page</a></h1>
    <?php
    $connections = mysqli_connect('localhost','root','','users');
    if(!$connections){
        die("Database connection not successfully .".mysqli_error());
    }
    $query = "SELECT * FROM member";
    $connect_query = mysqli_query($connections,$query);
    $count = mysqli_num_rows($connect_query);
    if($count>0){
        ?>
        <table class="table table-dark mt-5">
            <thead>
                <tr>
                    <th class="1">ID</th>
                    <th class="2">USERNAME</th>
                    <th class="2">PASSWORD</th>
                    <th class="1">ROLE</th>
                </tr>
            </thead>
        <?php
        while($row = mysqli_fetch_assoc($connect_query)){
            $id = $row['id'];
            $username = $row['username'];
            $password = $row['password'];
            $role = $row['role'];
            ?>
             <tbody>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $username; ?></td>
                    <td><?php echo $password; ?></td>
                    <td><?php echo $role; ?></td>
                </tr>
            <tbody>
            <?php
        }
        ?>
        </table>
        <?php
    }else{
        echo "You don't have any data on your database .";
    }
    ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>