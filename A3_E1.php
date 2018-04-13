<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8" />
    <title>Assignment3: Exercise1</title>
    <style>
        table,th,td{border-collapse: collapse;
                border: 1px solid black;
                width: 200px;
                height: 30px;
        }
    </style>
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
    function sortHash1($assoArr){
        asort($assoArr);
        $keys=array_keys($assoArr);
        $value=array_values($assoArr);
        $html="<table>
                    <tr>
                        <th>Name</th>
                        <th>Salary ($/h)</th>
                    </tr>";
        for($i=0;$i<count($assoArr);$i++){
            $html.= "<tr>
                    <td>$keys[$i]</td>
                    <td>$value[$i]</td>
                </tr>";
        }
        $html.="</table>";
        echo $html;
    }
    
    sortHash1(array("Jack"=>"55",
                    "Anita"=>"30","Ramesh"=>"40","Sophia"=>"21","Nastran"=>"41","William"=>"
                    39","David"=>"5") );
    ?>
    
    
    <h3>sortHash2</h3>
    <?php
    function sortHash2($assoArr, $code){
        switch($code){
            case 1:
                asort($assoArr);
                foreach ($assoArr as $name => $salary){
                    echo "name: $name , salary: $salary <br>";
                }
                break;
            case 2:
                ksort($assoArr);
                foreach ($assoArr as $name => $salary){
                    echo "name: $name , salary: $salary <br>";
                }
                break;
            case 3:
                arsort($assoArr);
                foreach ($assoArr as $name => $salary){
                    echo "name: $name , salary: $salary <br>";
                }
                break;
            case 4:
                krsort($assoArr);
                foreach ($assoArr as $name => $salary){
                    echo "name: $name , salary: $salary <br>";
                }
                break;
            default:
                echo "wrong code";
        }
    }
    
    echo "<br> <br> case 1 <br>";
     
    sortHash2(array("Jack"=>"55",
                    "Anita"=>"30","Ramesh"=>"40","Sophia"=>"21","Nastran"=>"41","William"=>"
                    39","David"=>"5") ,1);
     echo "<br> <br> case 2 <br>";
    
    sortHash2(array("Jack"=>"55",
                    "Anita"=>"30","Ramesh"=>"40","Sophia"=>"21","Nastran"=>"41","William"=>"
                    39","David"=>"5") ,2);
     echo "<br> <br> case 3 <br>";
  
    sortHash2(array("Jack"=>"55",
                    "Anita"=>"30","Ramesh"=>"40","Sophia"=>"21","Nastran"=>"41","William"=>"
                    39","David"=>"5") ,3);
     echo "<br> <br> case 4 <br>";
    
     sortHash2(array("Jack"=>"55",
                    "Anita"=>"30","Ramesh"=>"40","Sophia"=>"21","Nastran"=>"41","William"=>"
                    39","David"=>"5") ,4);
     echo "<br> <br> case 31 <br>";
    
     sortHash2(array("Jack"=>"55",
                    "Anita"=>"30","Ramesh"=>"40","Sophia"=>"21","Nastran"=>"41","William"=>"
                    39","David"=>"5") ,31);
    ?>
    
    
    <h3>averageTemp</h3>
    <?php
    function averageTemp($assoArr){
        $length=count($assoArr);
        $average=number_format(array_sum($assoArr)/count($assoArr),2); 
        sort($assoArr);
        echo "Average Temperature is: $average <br>";
        echo "List of four lowest temperatures: $assoArr[0], $assoArr[1], $assoArr[2], $assoArr[3]<br>";
         echo "List of four lowest temperatures: ".$assoArr[$length-4].", ".$assoArr[$length-3].", ".$assoArr[$length-2].", ".$assoArr[$length-1];
    }
    
    averageTemp(array(78, 60, 62, 68, 71, -17, 52, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, -10, 72, 65, 80,74, 62, 62, 65, 64, 0, 68, 73, 75, 79, 73, 77));
    ?>

    
    <h3>findStartorEnd</h3>
    <?php
    function findatStartorEnd($word,$str){
        $strArr=explode(" ",$str);
        if(strcmp($word, $strArr[0])==0||strcmp($word,$strArr[count($strArr)-1])==0){
            echo "true<br>";
            return true;
        }else{
            echo "false<br>";
            return false;
        }
    }
    findatStartorEnd("love","I love PHP so so much");
    findatStartorEnd("much","I love PHP so so much");
    findatStartorEnd("PHP", "PHP is my favorite language");
    ?>
</body>

</html>
