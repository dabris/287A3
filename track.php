<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <title>Assignment 3: Exercise3</title>
</head>
    <body>
    <?php
        date_default_timezone_set("America/New_York");
        if(isset($_COOKIE['count'])){
            $inOneDay=60*60*24+time();
          setcookie('count',$_COOKIE['count']+1,$inOneDay);
            echo "Hello, this is your #".$_COOKIE['count']." time here.<br>The last time you visited this website was: ". $_COOKIE['visitTime'];
           
        }else{
             $inOneDay=60*60*24+time();
            setcookie('count',2,$inOneDay);
            echo"Welcome! You are a new customer here";
           
          
        }
        
        setCookie('visitTime', date("r"),$inOneDay);
        ?>
    </body>
</html>