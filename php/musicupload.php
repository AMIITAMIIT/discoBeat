<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/upload.css">
    <title>Document</title>
</head>
<body>
    
<div class="contain">
<div class="uploadform">
<form method="post" enctype="multipart/form-data">
        <p>Track:</p>
        <input type="text" name="track" placeholder="song name:">
        <p>Artist:</p>
        <input type="text" name="artist" placeholder="Artist name:">
        <p>Album:</p>
        <input type="text" name="album" placeholder="album name:">
        <p>choose file:</p>
        <input type="file" name="upload" id="upload">
        <br>
        <input type="submit" value="Upload Track" name="submit">


    </form>
</div>
</div>

</body>
</html>
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'connection.php';
if(isset($_POST['submit']))
{

$track= $_POST['track'];
$artist= $_POST['artist'];
$album= $_POST['album'];

$file_name=$_FILES['upload']['tmp_name'];
$file=$_FILES['upload']['name'];


$query=mysqli_query($con,"insert into tracks(Track,Artist,Album,file)values('$track','$artist','$album','$file')") or die("Querry Error");
move_uploaded_file($file_name,"..\uploads/".$file);

?>
<script>
        window.alert("saved");
</script>
<?php 


}




?>