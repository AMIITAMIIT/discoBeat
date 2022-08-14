<?php
            include 'connection.php';
            if($_SESSION['username'])
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