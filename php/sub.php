
<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\cssforsub.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="para"> 
        
  <div class="prob">
  <h1 class="head">subscription plans                        <a href="#"> <i class="fa fa-facebook"></i></a>
    <a href="#"> <i class="fa fa-twitter"></i></a></h1>
  </div>

</div class="contain">

   <div class="wrapper">
       <div class="basic">
            <h1>Basic</h1>
            <div class="price">
                <h2>₹ 99/-</h2>
            </div>
            <div class="deals">
                <h4>High Quality</h4>
                <h4>No downloads</h4>
                <h4>ads</h4>
                <h4>No tunes</h4>
                <h4>1 Device</h4>           
            </div>
            <a href="http://localhost/discobeats/php/paytm/TxnTest.php?product=basic">BUY Now</a>
       </div>
       <div class="basic">
            <h1>Standard</h1>
            <div class="price">
                <h2>₹ 199/-</h2>
            </div>
            <div class="deals">
                <h4>Ultra Quality</h4>
                <h4>100 downloads</h4>
                <h4>No ads</h4>
                <h4>Tunes</h4>
                <h4>3 Devices</h4>           
            </div>
            <a href="http://localhost/discobeats/php/paytm/TxnTest.php?product=standard">Buy Now</a>
       </div>
       <div class="basic">
            <h1>Premium</h1>
            <div class="price">
                <h2>₹ 399/-</h2>
            </div>
            <div class="deals">
                <h4>Extreme Quality</h4>
                <h4>Unlimited Downloads</h4>
                <h4>No ads</h4>
                <h4>Tunes</h4>
                <h4>5 Devices</h4>           
            </div>
            <a href="http://localhost/discobeats/php/paytm/TxnTest.php?product=premium">Buy Now</a>
       </div>
   </div>
   <p id="return"> <a href="index.php">Cancel</a></p>

<script type="text/javascript" src="../js/particles.min.js" ></script>
<script type="text/javascript" src="../js/app.js"> </script>
</body>
</html>