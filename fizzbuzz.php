<?php
//print 1 to 100
// multiple of 3 output Fizz
//5 output BUZZ
//both Fizz Buzz
// for($i=1;$i<=100;$i++){

//     if($i%3 === 0 && $i%5 === 0){
//         echo "$i=FIZZ BUZZ <br>";
    
//     }elseif($i%5 === 0){
//     echo "$i=BUZZ <br>";
// }elseif($i%3 === 0 ){
//     echo "$i=FIZZ <br>"; 
// }else{
//     echo "$i <br>";
// }
// }
// //





//head or tails wala

// $headwon=0;
// $tailswon=0;
// for($i=0;$i<=100;$i++){
// $randomValue=rand(1,2);
// if($randomValue === 1){
//     echo("Counter=$i, {$randomValue} Heads,I win!<br>");
//     $headwon++;
// }else{
//     echo("Counter=$i,{$randomValue} Tails,You win!<br>");
//     $tailswon++;
// }
// }
// echo "total number of wins of heads is {$headwon} and total number of
// tails won is $tailswon"


// //lenght f string or paragarph
// $str="bilawal ali shaikh";
// $str1=preg_replace('/\s+/',"",$str);
// echo($str1);
// echo(strlen($str1));




//union of two arrays practice
// $arr1=array(1,2,3,4,5);
// $arr2=array(112,223,22,4);
// $arr3=array();
// $arr1.push(3);
// echo(array_push($arr3,3));
// print_r($arr3);

// function unionArr($arr1,$arr2,$arr3){

//     // $merge=array_merge($arr1,$arr2);
//     // print_r($merge);
// foreach($arr1 as $x){
// // echo("$x <br>");

// foreach($arr2 as $y)
// // echo ("$y <br>");


// if($x === $y){
//     // echo"same";
// }
// else{
    
// }
// array_push($arr3,",x=$x",",y=$y");
// }
// return $arr3;
// }

// $rerr=unionArr($arr1,$arr2,$arr3);
//  foreach ($rerr as $valdj){
// echo ($valdj);
//  }


//union of two arrays solution


$arr1=array(1,2,3,4,5);
$arr2=array(112,223,22,4);

$merge=array_merge($arr1,$arr2);
// print_r($merge);
foreach ($merge as $val){
    echo "$val,";
}
echo("<br>");
$final=array_unique($merge);

foreach ($final as $val){
    echo "$val,";
}
// print_r($final);


?>