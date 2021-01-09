<?php 
    session_start();
    include "include/static.php"; 
    include "include/language.php";
    include "include/newsletter.php";
    include "include/connection.php";

    $lang = new NewLanguage();
    $news = new Newsletter();
?>
<!DOCTYPE html>
<html lang="en">
    <?php include "include/header.php"; ?>
<body id="body">  
<div class="col-lg-12" style="height: 100vh;">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="lr-both-side-content">
            <?php 
                include "include/left-hand-side-slide1.php";
                include "include/left-hand-side-slide2.php";
                include "include/left-hand-side-slide3.php";            
            ?>    
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
</div>
<?php include "include/footer.php"; ?>
</body>
</html>
