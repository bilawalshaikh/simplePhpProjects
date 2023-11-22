
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<label>USERNAME:
<input type="text"  name="username">
</label>
<br><br>

<label>PASSWORD:
<input type="password" name="password" >
</label>
<br>
<input type="submit"  value="submit" name="submit"></input>
</form>

<?php


if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];


    if($username ==="admin" && $password=="admin"){
    echo("USER ARE SUCCESFULLY LOGIN");
   } elseif($username ==="admin"){
    echo("error! wrong password");
   }elseif($password=="admin"){
    echo("error! wrong username");
   } else{
    echo("both wrong");
   }


}
?>
</body>
</html>