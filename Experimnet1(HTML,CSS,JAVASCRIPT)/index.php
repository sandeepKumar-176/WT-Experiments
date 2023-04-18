<?php
session_start();
$conn=mysqli_connect('localhost','root','','login') or die('unable to connect')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body{
            text-align: center;
        }
        .field{
            margin-bottom:20px;
        }
</head>
<body>
    <h2>Please Login</h2>
    <div>
        <form action='index.php' method="post">
            <input type="text" name="username" placeholder="username" required=""></br>
            <input type="password" name="password" placeholder="password" required=""></br>
            <input type="text" name="username" placeholder="username" required=""></br>
            <input type="submit" name="username" class="field" name="Login" value="Login>
</form>
</div>
<?php
if(isset($POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select=mysqli_query($conn,"SELECT * FROM data WHERE username='$username' AND password='$password'");
    $row=mysqli_fetch_array($select);

}
else{
    echo '<script type="text/javascript">';
    echo 'alert("invalid username or password");';
    echo 'window.location.href="index.php" ';
    echo '</script>';
}
if(isset($_SESSION["username"])){
    header("Location:login.php");
}
?>
</body>
</html>