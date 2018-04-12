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
        function findMostFrequent($strArr){
            //make a string og all the elements of the original string with lower case
            $nstrArr=array_map('strtolower',$strArr);
            //find the frequency of each value in the array and put it into an array 
            $counting=array_count_values($nstrArr);
            //search for the max value in counting array and return its key and frequency
            $frequency=max($counting);
            return "frequency:".$frequency."<br>"."element(s):".implode(",",array_keys($counting,$frequency));      
        }
    
        echo findMostFrequent(array("dog","cat","fish","CAt","cat","fish","fish"));
        ?>


    <h3>toUppercaseFirst</h3>
        <?php
        function toUppercaseFirst($str){
            return ucwords($str);
        }
    
        echo toUppercaseFirst("hey! how are you? hello world!");
        ?>



    <h3>splitCapitalizeSort</h3>
        <?php
        function splitCapitalizeSort($str){
            $wordArr=explode(" ",$str);
            $upperArr=array_map('ucfirst',$wordArr);
            natsort($upperArr);   
            return($upperArr);
        }
    
        echo implode(", ", splitCapitalizeSort("I love php so so so much Just love it"));
        ?>

    
    <h3>dayofNextFriday</h3>
    <?php
    function dayofNextFriday(){
        $nextFriday=strtotime('next friday');
        echo date("d/m/Y", $nextFriday);   
    }
    dayofNextFriday();
    ?>
    
    
    <h3>findUniqueandSort</h3>
    <?php
    function findUniqueandSort($intArr){
        $nIntArr=array_unique($intArr);
        sort($nIntArr);
        return $nIntArr;
    }
    
    echo implode(", ", findUniqueandSort(array("1","2","3","1","6","2","6")));
    ?>
    
    
    <h3>sortHash1</h3>
    <?php
    
    ?>
    
    
    

</body>

</html>
