<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\css\cssforsignup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bodyq">
    <h1>Registration Form</h1>
        <div class="wrapper2">
 <form method="POST">
     <p>UserName</p>
     <input type="text" name="name" placeholder="Enter name:">
     <p>Password</p>
     <input type="password" name="pw" placeholder="Enter password:">



    <p class="submit"> <input type="submit" name="submit" value="Register"></p>
 </form> 
 <p class="social">    <a href="#"> <i class="fa fa-facebook"></i> fa-3x</a>
    <a href="#"> <i class="fa fa-twitter"></i></a></p>
 </div>
</body>
</html>
<?php 
    include 'connection.php';
    if(isset($_POST["submit"])&& !empty($_POST['name']) && !empty($_POST['pw']) )
    {
        $name=$_POST['name'];
        $pw=$_POST['pw'];
        $user_search = "select * from users where name='$name' ";
        $query= mysqli_query($con,$user_search);
        $user_count = mysqli_num_rows($query);
        if($user_count==0){
        $insert= "insert into  users(name,pw) values ('$name','$pw')";
        mysqli_query($con,$insert);
        $res=mysqli_query($con,$insert);
            if($res){
            ?>
            <script>
            location.replace('index.php');
            </script>
    
            <?php 

                }
            }
        else{
            echo "username taken";
        }
    }
    ?>
