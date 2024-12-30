<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 300px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            height: 40px;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required autofocus>
            <br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
            <br>
            <input type="submit" name="submit" value="Login" class="btn">
        </form>
    </div>
</body>
</html>
<?php
    session_start();
    include("koneksi2.php");
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $sql   = mysqli_query($db, $query);

        if(mysqli_num_rows($sql) > 0){
            //echo "Login Sukses";
            $data = mysqli_fetch_array($sql);
            $_SESSION['masuk'] = TRUE;
            $_SESSION['email'] = $email;
            $_SESSION['nama']  = $data['nama'];
            header ("location: index.php");
         }else{
            echo "Login Gagal";
        }
      }
?>