<!DOCTYPE html>
<html>

<head>
    <title>Assignment3: Exercise1</title>
</head>

<body>
    
    <h3>computerfactorial</h3>
    <?php
    function  computerfactorial($Number){
        if($Number==1 || $Number==0){
            return 1;
        }elseif($Number>1 && round($Number)==$Number){
            return $Number*computerfactorial($Number-1);
        }else{
            return false;
        }
    }
    
    echo computerfactorial(5) . "<br>";
    echo computerfactorial(1) . "<br>";
    echo computerfactorial(0.5);
    echo computerfactorial(-5);
    ?>
    
    
    <h3>findMostFrequent</h3>
<?php
    function findMostFrequent($String,$Array){
        $count=0;
        for($i=0;i<count($Array);i++){
            if(strcasecmp($String,$Array[i])){
                count++;
            }
        }
    }
    ?>
</body>

</html>
