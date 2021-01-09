<footer>
    <div class="col-md-12">
        <div class="col-md-6 pull-left">
            <p class="pull-right">
                 &copy; Lorveet <?php echo date("Y"); ?> 
            </p>
        </div>
        <div class="col-md-6">
            <div class="lr-languages pull-right">
                <a href="?lang=en">English</a><small> &nbsp; &#9679; &nbsp;</small> 
                <a href="?lang=de">Deutsche</a><small> &nbsp; &#9679; &nbsp;</small>
                <a href="?lang=fr">Français</a><small> &nbsp; &#9679; &nbsp;</small>
                <a href="?lang=it">Italiano</a>                     
            </div>
        </div>
    </div>
    
</footer>
<script src="<?php echo $assetsUrl; ?>/js/bootstrap.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/custom.js"></script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>