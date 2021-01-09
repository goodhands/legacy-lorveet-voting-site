<div id="slide3" class="slide3 hidden">

    <?php if(!isset($_SESSION['new'])){ ?>

        <h4 class="intro-text" data-section-name="social-media">
            <?php   
                echo $lang->local_lang( isset($_GET['lang']) ? $_GET['lang'] : 'de' , "social-media" );            
            ?>
        </h4>

    <?php } ?>    
    <div class="lr-social-media-links">
        <a href="https://www.facebook.com/Lorveet-821928131340628" target="_blank" class="lr-facebook" tite="Facebook">
            <span class="fab fa-facebook-f"></span>
        </a>
        <a href="https://www.twitter.com/lorveet" target="_blank" class="lr-twitter" tite="Facebook">
            <span class="fab fa-twitter"></span>
        </a>
        <a href="https://www.instagram.com/lorveet" target="_blank" class="lr-instagram" tite="Facebook">
            <span class="fab fa-instagram"></span>
        </a>
    </div>

</div>