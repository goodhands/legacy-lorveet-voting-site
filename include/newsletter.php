<?php

// include "language.php";
// $lang = new NewLanguage();

    class Newsletter{
        public function eMailQueue($connection, $email){
            //clean string
            $email = trim($email);

            $_COOKIE['userEmail'] = $email;

            //store user ip address to prevent registering twice
            $ip = $_SERVER['REMOTE_ADDR'];

            //check if email is already registered
            $duplicate_check = $connection->query("SELECT email, ip FROM visitors WHERE 
                                                   email = '$email' AND ip = '$ip' ");
            if($duplicate_check->num_rows != 0){
                return "You are already registered. Thank you!";
            }

            $confirm_queue = $connection->query("INSERT INTO visitors (email, ip)
                                                VALUES('$email', '$ip') ");

            if($confirm_queue){
                return "You have successfully subscribed..";
            }else{
                return (isset ($connection->error) || !empty($connection->error) ? $connection->error : "An error occured");
            }
        }   
    }