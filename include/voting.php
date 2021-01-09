<?php

class Voting{
    public function vote($connection, $logoName){
        $logoName = trim($logoName);
        $ip = $_SERVER['REMOTE_ADDR'];

        $confirm_insert = $connection->query("INSERT INTO logo(logo_name, votes, ip)
                            VALUES ('$logoName', '1', '$ip') ");
        
            if($confirm_insert){
                return "Vote acknowledged!";
            }else{
                return $connection->error;
            }
    }

    public function countVote($connection){

        $logo_one = $connection->query("SELECT SUM(votes) FROM logo WHERE logo_name = 'logo1'");
        $logo_two = $connection->query("SELECT SUM(votes) FROM logo WHERE logo_name = 'logo2'");
        $logo_three = $connection->query("SELECT SUM(votes) FROM logo WHERE logo_name = 'logo3'");
        $logo_four = $connection->query("SELECT SUM(votes) FROM logo WHERE logo_name = 'logo4'");
    }
}