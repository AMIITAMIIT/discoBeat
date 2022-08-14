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

$file= addslashes($_FILES['upload']['tmp_name']);
$file_name=addslashes($_FILES['upload']['name']);
$file= file_get_contents($file);
$file=base64_encode($file);

$query=mysqli_query($con,"insert into tracks(Track,Artist,Album,file,filename)values('$track','$artist','$album','$file','$file_name')") or die("Querry Error");

?>
<script>
        window.alert("saved");
</script>
<?php 

}