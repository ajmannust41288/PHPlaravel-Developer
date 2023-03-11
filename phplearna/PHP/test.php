<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testphp</title>
</head>
<body>
<?php 
// array chapter=========================================
// $country=array("cr","de","us");
// for($i=0;$i<count($country);++$i){
//     echo("$country[$i]<br>\n");
// }
//============================example1
// $country=array("cr","de","us");
// $num=count($country);
// for($i=0;$i<$num;++$i){
//     echo("$country[$i]<br>\n");
// }
//===================================example 2
// $country=array("cr","de","us");
// for($i=0;$i<count($country);++$i){
//     echo("$country[$i]<br>\n");
//     //remove elment if cr //it will cause problem without defining length
//     if($country[$i]=='cr') unset($country[$i]);
// }
//////////////////////////////////solution of example 2
// $country=array("cr","de","us");
// $num=count($country);
// for($i=0;$i<$num;$i++){
//     echo("$country[$i]<br>\n");
//     //remove if cr
//     if($country[$i]=="cr") 
//      unset($country[$i]);
// }
//===========================Non-sequentionally indexed arrays
//prob1
// $a[50]="cr";
// $a[20]="de";
// $a[10]="us";
// $a[]="uk";
// $key=key($a);
// $val=current($a);
// echo("Element $key equal to $val");
//===================solution of prob1
// $a[50]="cr";
// $a[20]="de";
// $a[10]="us";
// $a[]="uk";
// $key=key($a);
// $val=current($a);
// reset($a);
// while(list($key,$val) = each($a)){
//     echo("Element $key equal to $val");
// }
//===================================next() and prev()
// $arr=array(3,2,6,9,4,6);
// do{
//     $k=key($arr);
//     $val=current($arr);
//     echo ("elements $k equals $val <br>\n");
// }while(next($arr));
//prob2 ======================
// $arr=array(3,2,0,9,4,6);
// do{
//     $k=key($arr);
//     $val=current($arr);
//     echo ("elements $k equals $val <br>\n");
// }while(next($arr));
//=========================== of prob3
// $arr=array(3,2,0,9,4,6);
//     for(reset($arr);$k=key($arr);next($arr)){
//         $val=current($arr);
//         echo ("elements $k equals $val <br>\n");
//     }
  ///////////////////////////////////solution
//   $arr=array(1=>3,2,0,9,4,6);
//     for(reset($arr);$k=key($arr);next($arr)){
//         $val=current($arr);
//         echo ("elements $k equals $val <br>\n");
//     }  
//=============================================array_walk
// function println($s)
// {
//     echo "$s <br>\n";
// }
// $country=array("ca","cr","de");
// array_walk($country,println);
//==================================================String-indexed arrays 
// $country=array("ca"=>"Canada",
// "cr"=>"Costa Rice",
// "de"=>"Germany","uk"=>"United Kingdom","us"=>"United states");
// $arr=each($country);
// while(list($key,$val)=$arr){
//   echo ("elements $k equals $val <br>\n");
// }
?> 
</body>
</html>
