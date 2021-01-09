    <div id="slide2" class="slide2 <?php echo isset($_SESSION['logoVote']) ? '' : 'hidden'; ?>">
        <center>
            <div class="feedback-circle">
                <div class="feedback">
                <?php echo $lang->local_lang( isset($_GET['lang']) ? $_GET['lang'] : 'de' , "thanks" ); ?>
                </div>
            </div>
        </center>

        <h4 class="intro-text" data-section-name="email-sign-up">
            <?php
                echo $lang->local_lang( isset($_GET['lang']) ? $_GET['lang'] : 'de' , "lr-text-quote1" );
            ?>    
        </h4>
        
        <div class="form-inline lr-form" id="emailMessage">
            <div class="form-group" style="width: 100%;">
                <input type="text" name="email" id="email" 
                        class="lr-input form-control" 
                        placeholder="<?php echo $lang->local_lang( isset($_GET['lang']) 
                                        ? $_GET['lang'] : 'de' , 'placeholder' );
                                      ?>  ">
                <button class="btn-md form-control" id="signUpBtn" disabled="true">
                    <?php 
                        echo $lang->local_lang( isset($_GET['lang']) 
                        ? $_GET['lang'] : 'de' , 'submitButton' );
                    ?>
                </button>
                <span id="emailResponse"></span>
            </div>
        </div>
        <br/>
        <h4 class="intro-text">
            <?php
                echo $lang->local_lang( isset($_GET['lang']) ? $_GET['lang'] : 'de' , "lr-text-quote2" );
            ?>  
        </h4>
    </div>