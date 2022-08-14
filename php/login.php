
<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="..\css\cssforlogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    include 'connection.php';
    if(isset($_POST['submit']))
    {
        $email=$_POST["username"];
        $password=$_POST["password"];
        $email_search = "select * from users where name='$email' ";
        $query= mysqli_query($con,$email_search);
        $email_count = mysqli_num_rows($query);
        if($email_count)
        {
            $email_pass =mysqli_fetch_assoc($query);
            $pass= $email_pass['pw'];
            $_SESSION['username']= $email_pass['name'];
            if($pass==$_POST['password'])
            {   
                header('location: index.php');
            }
            else
            {
                $_SESSION['verify']='no';
            }
    
        }else
            {
                $_SESSION['verify']='yes';
            }
    
        }
    ?>
<div class="wrapper">
    <h1>Please login</h1>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <p class="para">User name:</p>
            <input type="text" name="username" placeholder="Enter Username:" >
            <p class="para">Password:</p>
            <input type="password" name="password"  placeholder="Enter password:">
            <input type="submit" name="submit" value="Login"><br>
            <?php 
             if(isset($_SESSION['verify'])){
             if($_SESSION['verify']=='no')
             {
                ?><p class='valid'>invalid password</p> <?php
                
             }
             else{
                ?><p class='valid'>invalid username</p> <?php
             }
            }
            ?>
            <div>
           <p class="sign"> <a href="signup.php"> Sign Up</a></p>
            </div>
        </form>
        <div class="bottom-text">
            <a href="#"> Forgot password</a><br>
        </div>
        <div class="socials">
        <p class="tree">
    <a href="#"> <i class="fa fa-facebook"></i></a>
    <a href="#"> <i class="fa fa-twitter"></i></a>
    <a href="#"> <i class="fa fa-pinterest"></i></a>
    <a href="#"> <i class="fa fa-linkedin"></i></a>
    </p>
</div>
</div>

</body>