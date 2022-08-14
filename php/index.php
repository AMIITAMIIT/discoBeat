<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="..\css\cssforphp.css">
</head>
<body>
<header>
        <h1>Disco Beats!</h1>
        <nav>
            <a href=""> HOME</a>
            <a href="">Top Hits</a>
            <a href="sub.php">Subscription plans</a>
            <?php
            if(isset($_SESSION['username']))
            {
            ?>
                <a href="logout.php">logout</a>
            <?php 
            }
            else{
                ?>
                <a href="login.php">login</a>
                <?php
            }
            ?>
        
        </nav>
        
    </header>
 <div class="user">
 <div class="margin"><?php 
        if(isset($_SESSION['username'])){
    ?> <p class="user">  Welcome <?php  echo $_SESSION['username'];?></p>
    <?php 
    }
    ?>
    </div>
    <h2 class="downloads">Weekly Downloads: <button class="counter" >1</button></h2>
 </div>
   
    <section class="back">
        <div class="div">
            <p>
                Music is an art form, and cultural activity, whose medium is sound.
                General definitions of music include common elements such as pitch (which governs melody and harmony),
                rhythm (and its associated concepts tempo, meter, and articulation), dynamics (loudness and softness), 
                and the sonic qualities of timbre and texture (which are sometimes termed the "color" of a musical sound).
                Different styles or types of music may emphasize, de-emphasize or omit some of these elements. 
                Music is performed with a vast range of instruments and vocal techniques ranging from singing to rapping; 
                there are solely instrumental pieces, solely vocal pieces (such as songs without instrumental accompaniment) 
                and pieces that combine singing and instruments. The word derives from Greek μουσική (mousike; "art of the Muses").

            </p>
        </div>
        <div class='box'>
    <table>
        <tr><th>SNO.</th>
            <th>Songs</th>
            <th>Artist</th>
            <th>Album</th>
            <th>Duration</th>
            <th>Play</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Without ME</td>
            <td>Halsey</td>
            <td>Without</td>
            <td>3:23</td>
            <td><audio controls>
  <source src="..\audio\withoutme.mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>2</td>
            <td>The Night We Met </td>
            <td>Lord Huron</td>
            <td>13 Reasons Why</td>
            <td>3:28</td>
            <td>
            <audio controls>
  <source src="..\audio\Lord_Huron_-_The_Night_We_Met(256k).mp3" type="audio/mpeg">
</audio>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Teri Mitti</td>
            <td>B Praak</td>
            <td>Kesari</td>
            <td> 4:47</td>
            <td><audio controls>
  <source src="..\audio\Teri_Mitti_-_Kesari__Akshay_Kumar_&_Parineeti_Chopra__Arko__B_Praak__Manoj_Muntashir(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Tank of Gas and Radio Song</td>
            <td>Travis</td>
            <td>Radio</td>
            <td>2:53</td>
            <td><audio controls>
  <source src="..\audio\Travis_Denning_-_Tank_Of_Gas_And_A_Radio_Song_(Audio)(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Star Boy</td>
            <td>Mausely</td>
            <td>Weeknd</td>
            <td>3:47</td>
            <td><audio controls>
  <source src="..\audio\The_Weeknd_-_Starboy_(Lyrics)_ft._Daft_Punk(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Dernier Danse</td>
            <td>Indila</td>
            <td>Danse</td>
            <td>3:34</td>
            <td><audio controls>
  <source src="..\audio\Indila_-_Dernière_Danse_(Clip_Officiel)(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Courtsey Call</td>
            <td>Thousand Foot Krutch</td>
            <td>The End is where we begin</td>
            <td>3:57</td>
            <td><audio controls>
  <source src="..\audio\Courtesy_Call_-_Thousand_Foot_Krutch_(Lyrics)(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>8</td>
            <td>Sick Boy</td>
            <td> Chain Smokers</td>
            <td> High Way</td>
            <td>3:28</td>
            <td><audio controls>
  <source src="..\audio\The_Chainsmokers_-_Sick_Boy_(Official_Music_Video)(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>9</td>
            <td> Faded</td>
            <td>Alan Walker</td>
            <td>Faded</td>
            <td>3:32</td>
            <td><audio controls>
  <source src="..\audio\Alan_Walker_-_Faded(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>10</td>
            <td>Impress</td>
            <td>Ranjit Wawa</td>
            <td>Good Times</td>
            <td>3:39</td>
            <td><audio controls>
  <source src="..\audio\Ranjit_Bawa_(Full_Song)_Impress__Desi_Crew__Bunty_Bains__Latest_Punjabi_Songs_2019(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>11</td>
            <td>Khaab</td>
            <td>Akhil</td>
            <td>Dreams</td>
            <td>3:39</td>
            <td><audio controls>
  <source src="..\audio\KHAAB__AKHIL__PARMISH_VERMA__NEW_PUNJABI_SONG_2018__CROWN_RECORDS_(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>12</td>
            <td>My Demons</td>
            <td>Starset</td>
            <td>Transmissions</td>
            <td>3:59</td>
            <td><audio controls>
  <source src="..\audio\My_Demons_-_Starset_-_(fan_lyric_video)(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>13</td>
            <td>On My Way</td>
            <td>Alan Walker</td>
            <td>Pubg</td>
            <td>3:36</td>
            <td><audio controls>
  <source src="..\audio\Alan_Walker,_Sabrina_Carpenter_&_Farruko__-_On_My_Way(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>14</td>
            <td>Same Beef</td>
            <td>Sidhu Moose wala</td>
            <td> Same beef</td>
            <td>4:22</td>
            <td><audio controls>
  <source src="..\audio\Same_Beef__Bohemia_Ft._Sidhu_Moose_Wala__Byg_Byrd__New_Punjabi_Song__Most_Popular_Punjabi_Song(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>15</td>
            <td>Smile</td>
            <td>Te Royal concept</td>
            <td>Smile</td>
            <td>3:15</td>
            <td><audio controls>
  <source src="..\audio\The_Royal_Concept_-_Smile(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>16</td>
            <td>All the Stars</td>
            <td>Kendrick Lamar</td>
            <td>Nightsky</td>
            <td>3:54</td>
            <td><audio controls>
  <source src="..\audio\Kendrick_Lamar,_SZA_-_All_The_Stars(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>17</td>
            <td>Adios</td>
            <td>Everglow</td>
            <td>Tanir</td>
            <td>3:24</td>
            <td><audio controls>
  <source src="..\audio\EVERGLOW_(에버글로우)_-_Adios_MV(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>18</td>
            <td>oh Kyu Nhi Jaan sake</td>
            <td>Ninja</td>
            <td>T.I.M.E</td>
            <td>4:29</td>
            <td><audio controls>
  <source src="..\audio\Ninja_Feat._Goldboy__Oh_Kyu_Ni_Jaan_Ske__Latest_Punjabi_Songs__White_Hill_Music(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>19</td>
            <td>Peg Pug</td>
            <td>Dev Jaito Wala</td>
            <td>Peg Thug life</td>
            <td>3:16</td>
            <td><audio controls>
  <source src="..\audio\pegpug.mp3" type="audio/mpeg">
</audio></td>
        </tr>
        <tr>
            <td>20</td>
            <td>One More Night</td>
            <td>Maroon 5</td>
            <td>Overexposed</td>
            <td>3:43</td>
            <td><audio controls>
  <source src="..\audio\Maroon_5_-_One_More_Night_(Official_Music_Video)(256k).mp3" type="audio/mpeg">
</audio></td>
        </tr>

        </table>
    </div>
</section>
<script src="../js/java.js"></script>
</body>
<footer>
        <p>joint project of  Amit Chaudhary and Pratham Jangra </p>
    </footer>
</html>
<?php 
    include "connection.php";
?>