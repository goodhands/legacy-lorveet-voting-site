    <?php if(!isset($_SESSION['logoVote'])){ ?>
<div class="slide1" id="slide1">

    <div class="col-lg-12">

        <center>
            <div class="feedback-circle">
                <div class="feedback">
                    <?php echo $lang->local_lang( isset($_GET['lang']) ? $_GET['lang'] : 'de' , "help" ); ?>
                </div>
            </div>
        </center>

        <h4 class="intro-text">
            <?php
                echo $lang->local_lang( isset($_GET['lang']) ? $_GET['lang'] : 'de' , "intro-text1" );
            ?>
        </h4>
        
        <div class="lr-logo-options col-lg-12">
        <center>
            <a href="#logoOne" class="col-md-3 lr-logo-selections" id="logo1" onclick="vote('logo1')">
            </a>
            <a href="#logoTwo" class="col-md-3 lr-logo-selections" id="logo2" onclick="vote('logo2')">
            </a>
            <a href="#logoThree" class="col-md-3 lr-logo-selections" id="logo3" onclick="vote('logo3')">
            </a>
            <a href="#logoFour" class="col-md-3 lr-logo-selections" id="logo4" onclick="vote('logo4')">
            </a>
      </center>
            <br/>
            <br/>
        <h4 class="intro-text">
        <?php
            echo $lang->local_lang( isset($_GET['lang']) ? $_GET['lang'] : 'de' , "intro-text2" );
        ?>
        </h4>
        <br>
        <br>
        <button class="btn-md form-control" id="submitVote" disabled="">
            <?php 
                echo $lang->local_lang( isset($_GET['lang']) 
                ? $_GET['lang'] : 'de' , 'submitButton' );
            ?>
        </button>
        </div>
</div>

</div>
<?php 
        }
?>
