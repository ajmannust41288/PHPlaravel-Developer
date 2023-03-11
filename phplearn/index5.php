<?php
//======================================static memeber and methods 
// class Foo {
//     public static $my_static = 'foo';
    
//     public function staticValue() {
//        return self::$my_static;
//     }
//  }
  
//  print Foo::$my_static . "\n";
//  $foo = new Foo();
 
//  print $foo->staticValue() . "\n";
//  //output is: foo  foo
 //======================================static memeber and methods example2
//  class Book{
//     public static $title="Aniimal book";
//     public function staticValue(){
// return self::$title;
//     }
//  }
//  print Book::$title."<br/>";//Aniimal book
//  $book=new Book();
//  print $book->staticValue();//Aniimal book
//  print $book->title;//error//Accessing static property Book::$title as non static 
//========================================================Final keyword 
// class BaseClass {
//     public function test() {
//        echo "BaseClass::test() called<br>";
//     }
    
//     final public function moreTesting() {
//        echo "BaseClass::moreTesting() called<br>";
//     }
//  }
 
//  class ChildClass extends BaseClass {
//     public function moreTesting() {//error due to  overridding 
//        echo "ChildClass::moreTesting() called<br>";
//     }
//  }
//================================================protected method inheritance 
// class BaseClass {
//     public function test() {
//        echo "BaseClass::test() called<br>";
//     }
    
//     protected function moreTesting() {
//        echo "BaseClass::moreTesting() called<br>";
//     }
//  }
 
//  class ChildClass extends BaseClass {
//      function moreTesting() {//does not gives an error  
//        echo "ChildClass::moreTesting() called<br>";
//     }
//  }
//================================================protected member inheritance 
// class BaseClass {
//     protected $name="ajman";
//     public function test() {
//        echo "BaseClass::test() called<br>";
//     }
    
//     protected function moreTesting() {
//        echo "BaseClass::moreTesting() called<br>";
//     }
//  }
 
//  class ChildClass extends BaseClass {
//   public  $name="kalim";
//      function moreTesting() {//does not gives an error  
//        echo "ChildClass::moreTesting() ajman khan wazir junai<br>";
//     }
//  }
//  $child=new ChildClass();
//  echo $child->name."<br/>";
//  echo $child->moreTesting()."<br/>";
//  echo $child->test();
// //output are given below 
// // kalim
// // ChildClass::moreTesting() ajman khan wazir junai

// // BaseClass::test() called
///======================================How to calling a parent class
// class Name{
//     var $fname;
//     var $lname;
//     function Name($fname,$lname){
//         $this->fname=$fname;
//         $this->lname=$lname;
//     }
//     function toString()
//     {
//         return($this->lname.", " .$this->fname);
//     }
// }
// class Subname extends Name{
//     var $mname;
//     function Subname($fname,$mname,$lname)
//     {
//         Name::Name($fname,$lname);
//         $this->mname=$mname;
//     }
//     function toString()
//     {
//         return(Name::toString()." " .$this->mname);
//     }
// }
// $sub=new Subname("ajman","ullah","khan");
// echo $sub->fname;
// foreach($_SERVER as $key=>$value){
//     print "\$_server[\"$key\"]==$value<br/>";
// }
// print $_SERVER["SCRIPT_NAME"]."<br/>";
// print $_SERVER["SERVER_NAME"]."<br/>";
// print $_SERVER["SERVER_PORT"]."<br/>";
// print $_SERVER["HTTP_USER_AGENT"]."<br/>";
// print $_SERVER["REQUEST_METHOD"]."<br/>";
// print $_SERVER["QUERY_STRING"]."<br/>";
// print $_SERVER["REQUEST_URI"]."<br/>";
// print $_SERVER["SCRIPT_FILENAME"]."<br/>";
// print $_SERVER["REMOTE_ADDR"]."<br/>";
// print $_SERVER["DOCUMENT_ROOT"];
//OUTPUT ARE
// /index5.php
// localhost
// 80
// Mozilla/5.0 (Windows NT 10.0; Win64; x64) 
// AppleWebKit/537.36 (KHTML, like Gecko) 
// Chrome/107.0.0.0 Safari/537.36 OPR/93.0.0.0
// GET

// /index5.php
// D:/XAMP/htdocs/index5.php
// ::1
// D:/XAMP/htdocs
//======================================END====================================================
//========================================type casting 
// $a=11.2;
// $b=(int)$a;
// echo $a."<br/>";//11.2
// echo $b."<br/>";//11
//======================================gettype()
// $n=100;
// if(gettype($n)=="integer")
// {
//     $number=$n;
//     echo "This is an integer which is:  {$n}";
// }
// else{
//     echo "this is an integer";
// }
//output :
//This is an integer which is: 100
//========================================settype()
// $n=100;
// if(settype($n,"integer"))
// {
//     echo "Conversion succesdded integer ";
// }
// else{
//     echo "this is an integer";
//     //output: Conversion succesdded integer
// }
//=========================================isset and unset()
// $n=100;
// if(isset($n))
// {
//     echo "this will print ";
// }
// else{
//     echo "<script>alert(Error)</script>";
// }
// //this will print
//example of unset ======================================
// $n=100;
// unset($n);
// if(isset($n))
// {
//     echo "this will print ";
// }
// else{
//     echo "there is no value ";
// }
//output is:  there is no value
//=====================================empty()
// $n=100;
// unset($n);
// if(empty($n))
// {//true
//     echo "this will print ";
// }
// else{//false
//     echo "there is no value ";
// }
// //output: this will print
//=====================================is_function()
// $n=100;
// // echo is_integer($n);//1 true
// echo is_string($n);//false 
///===================================is_value()
// $product="432BB";
// $i=intval($product);
// echo $i;//432
//-===========================is_value() 
// $product="432BB";
// $i=intval($product,16);
// print $i;//275131
//===================is_value()
// $product="43275";
// $i=intval($product,8);
// print $i;//18109
//====================is_value()
// $product="1101100101";
// $i=intval($product,2);
// print $i;//869
//================================================cahpter 07 functions 
// function multnum($n)
// {
//     return $n*$n*$n;
// }
// echo (multnum(7));
// //output is :  343
///////////====================================
// function js_alert($msg) { 
//     // Create a JavaScript alert using $msg 
//     if($msg=="")return;
//     echo ( 
//     "<script language=javascript>
//     alert(\"$msg\")</script>"
//     ); 
//    }
//    js_alert("The password you have entered is not valid");
//    js_alert("");
///==================================================newline()
// function newline($x)
// {
//     for($i=0;$i<$x;$i++){
//      echo "<br>\n";
//     }
// }
// echo "Line1";
// newline(5);
// echo "Line2";
//======================(((((((((((((((Function chapter 7)))))))))))))))===========
// function print_double($x)
// {
//   return $x*3;
//   echo "<br>\n";
// }
// $x=6;
// echo print_double($x);//pass by value 
// //output is : 18
///============================
// function print_double($x)
// {
//   return $x*3;
//   echo "<br>\n";
// }
// $x=6;
// print_double($x);//pass by value 
// echo $x;
// //output is : 6
// ======================================================
// function raise(&$salary, $percent) { 
//     // Increases $salary by $percent 
//     $salary += $salary * $percent/100; 
//    } 
//    $sal = 50000; 
//    echo ("Pre-raise salary: $sal<BR>\n"); // Prints 50000 
//    raise ($sal,4); 
//    echo ("Post-raise salary: $sal<BR>\n");// salary: 52000
///==========================================================
// function raise(&$salary, $percent=4) { 
//     // Increases $salary by $percent 
//     $salary += $salary * $percent/100; 
//    } 
//    $sal = 50000; 
//    echo ("Pre-raise salary: $sal<BR>\n"); // Prints 50000 
//    raise ($sal); 
//    echo ("Post-raise salary: $sal<BR>\n");// salary: 52000
//=======================================local and global scope 
// $x=6;//global scop
// function display(){
//     $x=7;//local scop
// }
// echo $x;//6
////////////////////////////==================================
// $x=6;//
//  function display(){
//     global $x;
//      $x=7;//local scop become global scope 
//  }
//  display();
// echo $x;//7
///============================================$global 
// $position = "m"; 
// function change_pos() { 
//  $GLOBALS["position"] = "b"; 
// } 
// change_pos(); 
// echo ("$position"); // Prints "b"
//==========================================nested functions 
// function vol($r){

//     function cube($n)
//     {
//         return $n*$n*$n;
    
//     }
//     return 3.14159 * cube($r);
// }
// $radius=4;
// echo vol($radius);//201.06176
// echo "<br>\n";
// echo cube(4);//64
//================================================
// function cube($n)
//     {
//         return $n*$n*$n;
    
//     }
// function vol($r){
//     return 3.14159 * cube($r);
// }
// $radius=4;
// echo vol($radius);//201.06176
// echo "<br>\n";
// echo cube(4);//64
//==============================power functions
// function power($base,$exponent){
//     if($exponent){
//         return $base *power($base,$exponent-1);
//     }

// }
// echo power(4,3);
//=======================================array chapter 8
// $country[]="ac";
// $country[]="at";
// $country[]="ar";
// $country[]="ad";
// $country[]="ae";
// $key=key($country);
// $value=current($country);
// foreach($country as $key=>$value)
// {
//     echo $key ." equal to ".$value."<br/>";
// }
//output:
//  0 equal to ac
// 1 equal to at
// 2 equal to ar
// 3 equal to ad
// 4 equal to ae
//=================================================
// $country[]="ac";
// $country[]="at";
// $country[]="ar";
// $country[]="ad";
// $country[]="ae";
// do{
// $key=key($country);
// $value=current($country);
// echo $key ." equal to ".$value."<br/>";
// }while(next($country));
//output
//  0 equal to ac
// 1 equal to at
// 2 equal to ar
// 3 equal to ad
// 4 equal to ae
//======================================
// $arr = array (1=>3, 2, 0, 9, 4, 6); 
// // flawed loop: 
// for (reset ($arr); $k = key ($arr); next ($arr)) { 
//  $val = current ($arr); 
//  echo ("Element $k equals $val<BR>\n"); 
// }
//output
// Element 1 equals 3
// Element 2 equals 2
// Element 3 equals 0
// Element 4 equals 9
// Element 5 equals 4
// Element 6 equals 6
//=============================================
// $country=array(1=>"ajman","kalim","jabar","zunaina","waqar");
// for(reset($country);$k=key($country);next($country)){
//     $value= current($country);
//     echo $k ."  equal to ".$value ."<br>\n";
// }
//output
// 1 equal to ajman
// 2 equal to kalim
// 3 equal to jabar
// 4 equal to zunaina
// 5 equal to waqar
//======================================================
// $countries=array(1=>1,44,56,67,78);
// reset ($countries); 
// while (list ($key, $value) = each ($countries)) { 
//  echo "Element $key equals $value<BR>\n"; 
// }
//==========================================array_walk()
// function print_ln($s)
// {
//     echo $s ."<br>\n";
// }
// $names=array("ajman","kalim","akram","salam","zubair");
// array_walk($names,print_ln());
//=========================================================chapter 11 File handling and Data Storage
// if(!$file=fopen("ajman7.jpg","rb"))
// {
//     echo ("this is not found");
// }
// else
// {
//    echo  fpassthru($file);
//     fclose($file);
// }
//=============================================================================ch11
// if(!$file=fopen("newfile.txt","r")){
//     echo ("couldn't open file");
// }
// else{
//     $text=fread($file,filesize("newfile.txt"));
//     echo $text;
//     fclose($file);
// }
//==========================================fgetc()
// if(!$file=fopen("newfile.txt","r")){
//     echo ("couldn't open file");
// }
// else{
//     $text=fgetc($file);
//     echo $text;
//     fclose($file);
// }
//output : < //first character returned  
////////////////////////////////////////////fgets()
// if(!$file=fopen("newfile.txt","r")){
//     echo ("couldn't open file");
// }
// else{
//     $text=fgets($file);
//     echo $text;
//     fclose($file);
// }
//output: AJAX //single line print
//==========================================fgets()
// $arrtext=file("newfile.txt");
// for($i=0;$i<count($arrtext);$i++)
// {
//     echo "<p>$arrtext[$i]</p>  ";
// }
//////////==================================fseek()
// echo fseek("newfile.txt",2);//o for success
// if(!$file=fopen("newfile.txt","r"))
// {
//     echo "could not find file";
// }
// else{
//     while(!feof($file)){
//         echo (fgetc($file));
//     }
// }
//AJAX AJAX is not a programming language. 
//AJAX is a technique for accessing web servers from a web page.
//============================================
?>