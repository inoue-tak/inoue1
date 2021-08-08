<?php

for($i =1; $i <=100; $i++){

    // 3と5で割り切れる場合はFizzBuzz
    if($i % 3 == 0 && $i % 5 == 0){
 
        echo 'FizzBuzz';
        echo '<br>';

    // 3で割り切れる場合はFizz
    }elseif($i % 3 == 0){
        
        echo 'Fizz';
        echo '<br>';


    // 5で割り切れる場合はBuzz
    }elseif($i % 5 == 0){

        echo 'Buzz';
        echo '<br>';


    // どちらでも割り切れない場合は数値を出力
    }else{

        echo $i;
        echo '<br>';

    }


}
?>