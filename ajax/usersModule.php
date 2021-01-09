<?php 
    include "../include/connection.php";
    include "../include/newsletter.php";    
    include "../include/voting.php";    


    if(isset($_POST['email'], $_POST['signup'])){

        session_start();

        $email = trim($_POST['email']);


        if($email == ""){
            echo "Please enter your email address";
        }else{

            $news = new Newsletter();

            $response = $news->eMailQueue($connection, $email);

            echo $response;

            unset($_SESSION['logoVote']);
        }
        
    }elseif(isset($_POST['vote'], $_POST['logo'])){

        session_start();
        $logo = trim($_POST['logo']);

        $vote = new Voting();

        //i'm using this here to keep the page from going back to the
        //vote page when anyone is on the email page and they click on
        //a new language
        $_SESSION['logoVote'] = true;

        $response = $vote->vote($connection, $logo);

        $percentageIncrease = $vote->countVote($connection);

        echo $percentageIncrease;

    }