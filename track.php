<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <title>Assignment 3: Exercise3</title>
</head>
    <body>
    <?php
        $inOneDay=60*60*24+time();
        setCookie('visited', date("G:I-m/d/y"),$inOneDay);
        if(isset($_COOKIE['visited'])){
          setCookie('count',(int)&_COOKIE['count']+1,$inOneDay);
            echo "Hello, this is your $count time here";
        }else{
            echo"Welcome! You are a new customer here";
            $count++;
        }
        ?>
    </body>
</html>