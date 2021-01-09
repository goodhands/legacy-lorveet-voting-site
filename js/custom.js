$(".lr-logo-selections").click(function(){
    return false;
})

$(".lr-logo-selections").mouseover(function(){
    revealStats();
})

function revealStats() {
    $(".lr-stats-text").css("opacity", "1");
}

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
});

//funtion to select logo with animation
function baldl(logo, logoName){
    for(var i = 0; i <= logo.length; i++){
        $("#"+logo[i]).removeClass("fadeOff"); 
        if(logoName !== logo[i]){
            $("#"+logo[i]).addClass("fadeOff");
        }
    }
}

//function implementing the logo selection function
var finalSelected;

function vote(logoName){

    var logos = ["logo1", "logo2", "logo3", "logo4"];

    baldl(logos, logoName)

    finalSelected = logoName;

    $("#submitVote").removeAttr("disabled", "true");

    return false;
}



//once user clicks the submit vote fuinction
    $("#submitVote").click(function(){
        
        if(finalSelected){
            $("#submitVote").removeAttr("disabled", "true");
        } 
        
        $.ajax({
            type: 'POST',
            url: "ajax/usersModule.php",
            data: "vote&logo="+finalSelected,
            success: function(response){
                $("#body").append(response);
            },
            error: function(){
                console.log("Error occured while trying to upload with ajax");
            }
        });

        $("#slide1").css("opacity", "0"); 
        
        setTimeout(function(){
            $("#slide1").css("display", "none");
        }, 600);

        $("#slide2").css("opacity", "0");
        $("#slide2").removeClass("hidden");
        setTimeout(function(){
            $("#slide2").css("opacity", "1");
        }, 1000);
        
    });


    //enable the signup button
    $("#email").focus(function(){
            $("#signUpBtn").removeAttr('disabled');
    });


    //sign up function fires once signup button is clicked
    $("#signUpBtn").click(function(){
        var emailUser = $("#email").val();

        if(emailUser == "") {
            $("#errorResponseEmail").html("Please enter your email");
            console.log("Please enter your email");
            return;
        }

        // ajax stuff here
        $.ajax({
            type: 'POST',
            url: "ajax/usersModule.php",
            data: "signup&email="+emailUser,
            success: function(response){
                //on success 
                $("#emailMessage").html("Thank you for signing up! We'll get back to you shortly!");    
                console.log(response);
            },
            error: function(){
                console.log("Error occured while trying to upload with ajax");
            }
        });

        $("#slide2").css("opacity", "0"); 
        
        setTimeout(function(){
            $("#slide2").css("display", "none");
        }, 600);


        $("#slide3").css("opacity", "0");
        $("#slide3").removeClass("hidden");
        setTimeout(function(){
            $("#slide3").css("opacity", "1");
        }, 1000);
    });
