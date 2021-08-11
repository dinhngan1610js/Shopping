<?php
    ob_start();
    // include header.php
    include ('header.php');
?>

<!-- home -->
<?php
    // include home.php
    include ('Template/home.php');

    //include brand.php


    //include new.php
    include ('Template/new.php');

    //include featured.php
    include ('Template/featured.php');

    //include banner.php
    include('Template/banner.php');

    //include jewelry.php
    include ('Template/jewelry.php');

    //include bags.php
    include ('Template/bags.php');

    //include sneakers.php
    include('Template/sneakers.php');

    //include dress.php
    include ('Template/dress.php');

    include ('Template/brand.php');
?>


<?php
// include footer.php
include ('footer.php');
?>

