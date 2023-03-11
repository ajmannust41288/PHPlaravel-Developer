<?php
//how to read entire file in php 
// $filename='data.csv';
// if(!is_readable($filename))
// {
//     die('the file is not opening '.$filename."");
// }
// print "<pre>";
// print_r(file_get_contents($filename)) ;
// print "</pre>";
//--------------------------------------------------writing and fputcvs() uses 
// How to write a file and edit it 
// $stock=[['symbol12','company11','peice13'],
// ['symbol2','company2','peice'],['symbol7','company7','peice7'],
// ['symbol3','company3','peice'],
// ['symbol4','company4','peice'],
// ['symbol5','company5','peice'],
// ['symbol6','company6','peice']];
// $f=fopen('data.csv','w');
// if($f===false)
// {
//     die("the file is not opening ".$f."");
// }
// foreach($stock as $stk)
// {
//     fputcsv($f,$stk);
// }
// fclose($f);
//---------------------------------------------------To verify the contents of data in data.csv file 
// $filename='data.csv';
// if(!is_readable($filename))
// {
//     die('the file is not opening '.$filename."");
// }
// print "<pre>";
// print_r(file_get_contents($filename)) ;
// print "</pre>";
//------------------------------------------read csv file using fgetcsv()
// $filename='data.csv';
// $data=[];
// $f=fopen($filename,'r');
// if($f===false){
//     die('The file is not opening'.$filename);
// }
// //read eachline in csv file at a time 
// while(($row=fgetcsv($f))!==false){
//     $data[]=$row;
//     print "<pre>";
// print_r ($data);
// print "</pre>";
// }
// //close the file 
// fclose($f);
//-----------------------------------------------Directory operations 
// $dh = opendir('htdocs');

// if ($dh) {
// 	while ($e = readdir($dh)) {
// 		if ($e !== '.' && $e !== '..') {
//             print "<pre>";
//             echo $e, PHP_EOL;
//             print "</pre>";
// 		}
// 	}
// }

// closedir($dh);
//-------------------------get the current directory
// echo getcwd();
//output :    D:\XAMP\htdocs
//--------------------------------lets check again 
// $dh = opendir('login');

// if ($dh) {
// 	while ($e = readdir($dh)) {
// 		if ($e !== '.' && $e !== '..') {
//             print "<pre>";
//             echo $e, PHP_EOL;
//             print "</pre>";
// 		}
// 	}
// }

// closedir($dh);
//------------------------create a new directory
// $dir = 'dashboard2';

// if(mkdir($dir)){
//     echo 'The new directory is ',$dir,'successsfully created';
//     //output The new directory is dashboard2successsfully created 
// }
//----------------------------delete a directory in php 
// $dir='dashboard2';
// $dirm=rmdir($dir);
// if($dirm===true)
// {
//     die("The directory $dir is successfully deleted");
// }
// else{
//     die("Directory is not deleted ");
//     //output The directory dashboard2 is successfully deleted
// }
//---------------------------------check if a path is a dir
// $dir='login';
// if(is_dir($dir)){
//     echo 'the path is directory     ' , $dir,'     found successfully';
// }
// else{
//     echo "Nothing found as dir";
// }
// //output   the path is directory login found successfully
//-----------------------glob function uses 
// $path='./login/*.css';
// $filename=glob($path);
// foreach($filename as $fname){
//     echo 'the file executed successfully ', $fname,'<br/>';}
//--------------------------------------------filesize and diectory path 
// echo array_sum(array_map('filesize', glob('./dashboard/*.php')));
// //output 21 
// echo array_sum(array_map('filesize',glob('./login/*.php')));
//output 21266
//----------------------------------------check again
// $path='./login/*.css';
// $filename=glob($path);
// foreach($filename as $fname){
//     echo  $fname.'<br/>';
// }
//---------------------------------------------------
// $filenames = glob('{.[!.],}*', GLOB_BRACE); 
// foreach ($filenames as $filename) {
//     echo $filename . '<br>';
// }
//----------------------------------php glob()-----
// foreach(glob("*.txt") as $filename)
// {
//     echo "$filename size is ".filesize($filename)."\n";
//     //output test.txt size is 781
// }
//---------------------------------------------task2
// foreach(glob("./dashboard/*.html") as $filename)
// {
//     echo "$filename size is : ".filesize($filename)."<br/>";
//     //output is given below 
//     // ./dashboard/404.html size is : 4384
//     // ./dashboard/faq.html size is : 31751
//     // ./dashboard/howto.html size is : 6021
//     // ./dashboard/howto_platform_links.html size is : 3951
//     // ./dashboard/howto_shared_links.html size is : 5317
//     // ./dashboard/index.html size is : 7577
// }
///-----------------------------task3 
// foreach(glob("*.html") as $filename)
// {
//     echo "$filename size is : ".filesize($filename)."<br/>";
//     //output is given below 
//     // applications.html size is : 3607
//     // index.html size is : 0
//     // index1.html size is : 781
// }
//---------------------------------------basename()
// echo "1) ".dirname("/htdocs/index.php", ".php").PHP_EOL;
// echo "2) ".dirname("/htdocs/index.php").PHP_EOL;
// echo "3) ".basename("/htdocs/public").PHP_EOL;
// // echo "4) ".basename("/htdocs/").PHP_EOL;
// echo "5) ".basename(".").PHP_EOL;
// echo "6) ".basename("/");
// //1) index 2) index.php 3) public 4) htdocs 5) . 6)
//-----------------------------------------dirname() uses in php8
// echo "1) ".dirname("/htdocs/dashboard").PHP_EOL;
// echo "2) ".dirname("/htdocs/").PHP_EOL;
// echo "3) ".dirname("/htdocs/public").PHP_EOL;
// // echo "4) ".basename("/htdocs/").PHP_EOL;
// echo "5) ".dirname(".").PHP_EOL;
// echo "6) ".dirname("/");
// //output 1) /htdocs 2) \ 3) /htdocs 5) . 6) \
//----------------------------------------------task1
// echo "1) ".dirname("/htdocs/dashboard\phpinfo.php").PHP_EOL;
//output 1) /htdocs/dashboard
//--------------------------------------------
// echo dirname('/htdocs/dashboard\images\use-sqlite.image3.png').PHP_EOL;
//output /htdocs/dashboard\images
//----------------------------------------php path_info().......
// $filename='htdocs/dashboard/phpinfo.php';
// $path=pathinfo($filename);
// echo '<pre>';
// print_r($path);
// echo '</pre>';
//output is given below 
// Array
// (
//     [dirname] => htdocs/dashboard
//     [basename] => phpinfo.php
//     [extension] => php
//     [filename] => phpinfo
// )
/////////---------------------------special taks
// $filename='htdocs/dashboard/phpinfo.php';
// $path=pathinfo($filename,PATHINFO_BASENAME);
// echo '<pre>';
// print_r($path);
// echo '</pre>';
//output is phpinfo.php
/////--------------------------------PHP Magic constants ........task1
// namespace App;

// class HttpRequest
// {
//     public function __construct()
//     {
//         echo 'The current class name is ' .  __CLASS__ . '<br>';
//     }
//     public function isPost()
//     {
//         echo 'The current method is ' . __METHOD__ . '<br>';
        
//         return $_SERVER['REQUEST_METHOD'];
//     }
// }

// $request = new HttpRequest();

// $request->isPost();

// echo 'The current namespace is ' . __NAMESPACE__ . '<br>';
// echo 'The fully qualified class name is '  . HttpRequest::class . '<br>';
// echo 'The current file is ' . __FILE__ . '<br>';
// echo 'The current line is ' . __LINE__ . '<br>';
// echo 'The current directory is ' . __DIR__  . '<br>';
//------------------------------------------Constant PHP task2
// namespace App;
// class Httmethod{
//     public function __construct(){
// echo 'The current class name is '. __Class__.'<br/>';
//     }
//     public function isPost()
//     {
//         echo 'The current method is '. __METHOD__.'<br/>';
//         return $_SERVER['Request_method'];
//     }

// }
// $request=new Httmethod();
// echo 'The current namespace is '. __NAMESPACE__.'<br/>';
// echo 'The fully qualified class name  is '.Httmethod::class.'<br/>';
// echo 'The current file is '. __FILE__.'<br/>';
// echo 'The current line  is '. __LINE__.'<br/>';
// echo 'The current directory  is '.__DIR__.'<br/>';
//-----------------------------------------PHP Time 
// $current_time = time();
// echo date('Y-m-d g:ia', $current_time) . '<br>';
// //output 2022-11-24 2:52pm
//--------------------form in php
// if(isset($_POST['email']))
// {
//     var_dump($_POST['email']);
// }
// 
//============================================{PHP DATE TIME FORMAT}==========
// echo "Th date is    ".date("y/m/d")."<br/> ";//Th date is 22/11/28
// echo "Th date is    ".date("y-m-d")."<br/> ";//Th date is 22-11-28
// echo "Th date is    ".date("y.m.d")."<br/> ";//Th date is 22.11.28
// echo "The day  is    ".date("l")."<br/> ";//Th day  is Monday
// date_default_timezone_set('Asia/karachi');
// echo "The Time   is    ".date("h:i:sa")."<br/> ";//The Time is 10:29:28am
// $d=mktime(11,14,56,8,12,2020);
// $e=strtotime("10:40am November 28 2022");
// $g=strtotime("1:20pm november 2022");
// $f=strtoupper("ajman khan wazir");
// echo "Date created      ".date("y/m/d  h:i:sa",$d)."<br/> ";
// echo "Date Human readable  ".date("20y-m-d  h:i:sa",$e)."<br/> ";
// //Date Human readable 2022-11-28 10:40:00am
// echo "date human readbable ".date("20y/m/d h:i:sa",$g)."<br/>";
// echo $f."<br/>";//AJMAN KHAN WAZIR
// $d=strtotime("tomorrow");
// echo "Th date is    ".date("20y-m-d h:i:sa",$d)."<br/> ";
// //Th date is 2022-11-29 12:00:00am
// $f=strtotime("saturday");
// echo "Th date is    ".date("20y-m-d h:i:sa",$f)."<br/> ";
// //Th date is 2022-12-03 12:00:00am
// $e=strtotime("+3 months");
// echo "Th date after 3 months is     ".date("20y-m-d h:i:sa",$e)."<br/> ";
// // Th date is 2023-02-28 09:34:56am
// $g=strtotime("+3 years");
// echo "Th date after 3years from now is    ".date("20y-m-d h:i:sa",$g)."<br/> ";
// //Th date after 3years from now is 2025-11-28 09:37:52am
////////////=================================examples 
// $startdate = strtotime("Saturday");
// $enddate = strtotime("+6 weeks", $startdate);
// echo  "The starting date is    ".date("20y-m-d",$startdate)."<br/> ";
// echo  "The end date  is    ".date("20y-m-d",$enddate)."<br/> ";
// while ($startdate < $enddate) {
//   echo date("20y-m-d", $startdate) . "<br>";
//   $startdate = strtotime("+1 week", $startdate);
// }
////=========================================example2 PHP date strtotime()
// $startdate=strtotime("tuesday");
// $enddate=strtotime("+3 months",$startdate);
// while($startdate<$enddate)
// {
//     echo "the date is ".date("20y-m-d",$startdate)."<br/>";
//     $startdate=strtotime("+1 month",$startdate);

// //output:
// // the date is 2022-11-29
// // the date is 2022-12-29
// // the date is 2023-01-29
// }
////=========================================example3 PHP date strtotime()
// $d1=strtotime("july 04 2023");
// //How many days remaining until july 04 2023
// $d2=ceil(($d1-time())/60/60/24);
// echo "Days remainaing   ".$d2."  until july 04 of 2023";  
// //output: Days remainaing 218 until july 04 of 2023 
//===============================================date sunset functions
// Lisbon, Portugal:
// Latitude: 38.4 North, Longitude: 9 West
// Zenith ~= 90, offset: +1 GMT

// echo("Lisbon, Portugal: Date: " . date("D M d 20y h:i:sa"));
// echo("<br>Sunset time: ");
// echo(date_sunset(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
//output: Lisbon, Portugal: Date: Mon Nov 28 2022 11:25:17am
// Sunset time: 18:13
//===============================================date_sunset() functions example2
// date_default_timezone_set("Asia/Karachi");
// echo "Gilgit, Gilgit-Baltistan, Pakistan: date ".date("D M d 20y ");
// echo ("<br/> Sunset Time ");
// echo (date_sunset(time(),SUNFUNCS_RET_STRING,35.920834, 74.308334,90,5));
// //Gilgit, Gilgit-Baltistan, Pakistan: date Mon Nov 28 2022
// // Sunset Time 16:46
//===============================================date_sunrise()
// date_default_timezone_set("Asia/Karachi");
// echo "Gilgit, Gilgit-Baltistan, Pakistan: date ".date("D M d 20y ");
// echo ("<br/> SunRise  Time ");
// echo (date_sunrise(time(),SUNFUNCS_RET_STRING,35.920834, 74.308334,90,5));
// //Gilgit, Gilgit-Baltistan, Pakistan: date Mon Nov 28 2022
// // SunRise Time 06:54
//==============================================date_sun_info() uses
// $sunset_date=date_sun_info(strtotime("tomorrow"), 32.9889, 70.604164);
// echo "Sun information of bannu district KPK Pakistan";
// foreach($sunset_date as $key=>$value)
// {
//     echo "$key: ".date("h:i:s",$value)."<br/>";
// }
// //output 
// // sunrise: 02:51:09
// // sunset: 12:50:48
// // transit: 07:50:58
// // civil_twilight_begin: 02:24:39
// // civil_twilight_end: 01:17:18
// // nautical_twilight_begin: 01:53:05
// // nautical_twilight_end: 01:48:52
// // astronomical_twilight_begin: 01:22:15
// // astronomical_twilight_end: 02:19:41
//===============================================example2 of sun_info
// date_default_timezone_set("Asia/Karachi");
// $sunset_date=date_sun_info(strtotime("tomorrow"), 32.9889, 70.604164);
// echo "Sun information of bannu district KPK Pakistan<br/>";
// foreach($sunset_date as $key=>$value)
// {
//     echo "$key: ".date("h:i:sa",$value)."<br/>";
// }
// //output of above code is 
// // Sun information of bannu district KPK Pakistan
// // sunrise: 06:59:10am
// // sunset: 05:12:25pm
// // transit: 12:05:48pm
// // civil_twilight_begin: 06:33:43am
// // civil_twilight_end: 05:37:52pm
// // nautical_twilight_begin: 06:03:18am
// // nautical_twilight_end: 06:08:17pm
// // astronomical_twilight_begin: 05:33:30am
// // astronomical_twilight_end: 06:38:05pm
//===============================================date_create()
// $d=date_create("2022-11-28");
// date_time_set($d,5,25);
// echo date_format($d,"Y-m-d h:i:sa");
// //2022-11-28 05:25:00
//===================================uses of php filter
// $str = "<h1><mark>Hello ajman khan wazir !</mark></h1>";
// $d=filter_var($str,FILTER_SANITIZE_STRING);//remove all tags 
// echo $d;
// //output Hello ajman khan wazir !
//============================================validate an integer 
// $in=100;
// if(!filter_var($in,FILTER_VALIDATE_INT)===false)
// {
//     echo "Invalidation it is not an integer ";
// }
// else{
//     echo "successfully validated ";
// }
// //output is :   validation it is  an integer
///===========================================another solutions 
// $in=0;
// if(filter_var($in,FILTER_VALIDATE_INT)===0||!filter_var($in,FILTER_VALIDATE_INT)===false)
// {
//     echo "validation it is  an integer ";
// }
// else{
//     echo "invalidated ";
// }
// //output is :   validation it is  an integer
//===================================================validate an ip address
// $ip='127.0.0.1';
// if(!filter_var($ip,FILTER_VALIDATE_IP)===false)
// {
//     echo "validation $ip is correct  ";
// }
// else{
//     echo "invalidated $ip ";
// }
// //output is :   validation 127.0.0.1 is correct
//===============================================validates and sanitizes an email addressa 
// $email="ajman41288@gmail.com";
// $email=filter_var($email,FILTER_SANITIZE_EMAIL);
// if(!filter_var($email,FILTER_VALIDATE_EMAIL)===false)
// {
//     echo "$email validation is sucessfully done  ";
// }
// else{
//     echo "invalidated $email address ";
// }
// // output is :  ajman41288@gmail.com validation is sucessfully done
//================================================validates and sanatiz a URL
// $url="https://ajman.art.blog";
// $url=filter_var($url,FILTER_SANITIZE_URL);
// if(!filter_var($url,FILTER_VALIDATE_URL)===false)
// {
//     echo "$url validation is sucessfully done  ";
// }
// else{
//     echo "invalidated $url address ";
// }
// //output is :  https://ajman.art.blog validation is sucessfully done
//==============================================PHP  file creation 
// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "ajman khan wazzir\n";
// fwrite($myfile, $txt);
// $txt = "North waziristan \n";
// fwrite($myfile, $txt);
// fclose($myfile)
// //out is :   
// // ajman khan wazzir
// // North waziristan 
//===========================================php append 
// $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
// $txt = "ajman khan wazzir\n";
// fwrite($myfile, $txt);
// $txt = "North waziristan \n";
// fwrite($myfile, $txt);
// fclose($myfile)
// // ajman khan wazzir
//  // North waziristan 
//===================================php read and open()
// $myfile = fopen("newfile.txt",'r') or die("Unable to open file!");
// echo $myfiler=fread($myfile,filesize("newfile.txt"));
// fclose($myfile);
//=======================================================PHP OOP objects and classes 
// class Strname{
//     public $name;
//     public $age;
//     public $city;
//     function __construct($name,$age,$city)
//     {
//         $this->name=$name;
//         $this->age=$age;
//         $this->city=$city;  
//     }
    
//     function set_name($name,$age,$city)
//     {
//         $this->name=$name;
//         $this->age=$age;
//         $this->city=$city;
//     }
//     function get_name()
//     {
//         return "name is ".$this->name." <br/>"."age is ". $this->age.
//         "  <br/>" ."city is ".$this->city."<br/><br/>";
//     }
//     function __destruct()
//     {
//         echo "the name {$this->name} <br/> age is {$this->age} <br/>  city is {$this->city}";
//     }
    
// }
// $ob1=new Strname("ajman",34,"bannu");
// $ob2=new Strname("kalim wazir",36,"Domail wazir");
// // //  $ob1->set_name('ajman',34,'bannu');
// // echo $ob1->get_name();
// // // $ob2->set_name('kalim wazir',36,'Domail wazir');
// // echo $ob2->get_name();
// // var_dump($ob1 instanceof Strname);
// // echo "<br/>";
// // var_dump($ob2 instanceof Strname);
// // //output is :
// // // name is ajman
// // // age is 34
// // // city is bannu

// // // name is kalim wazir
// // // age is 36
// // // city is Domail wazir
// // //bool(true)
// // // bool(true)
////============================================another examples PHP OOP 
// class Fruit {
//     public $name;
//     public $color;
  
//     function __construct($name, $color) {
//       $this->name = $name;
//       $this->color = $color;
//     }
//     function __destruct() {
//       echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
//   }
  
//   $apple = new Fruit("Apple", "red")
//   //output is : The fruit is Apple and the color is red.
//=================================================Access Modifier concept 
// class Fruit{
//     public $name;
//     protected $color;
//     private $wight;
//     // function set_name($name)
//     // {
//     //     $this->name=$name;
//     // }
//     // protected set_color($c)
//     // {
//     //     $this->color=$c;
//     // }
//     // private set_wight($w)
//     // {
//     //     $this->wight=$w;
//     // }
    
// }
// $fruit=new Fruit();
// $fruit->name="ajman";//ok
// $fruit->color="red";//error
// $fruit->wight='45';//error
// // $fruit->set_name("ajman");//ok
// // $fruit->set_color("red");//error
// // $fruit->set_weight(45);//error
///==============================================================PHP OOP examples 3
// class Book{
//     var $price;
//     var $title;
//     function setPrice($par){
//         $this->price=$par;
//     }
//     function getPrice()
//     {
//         echo $this->price."<br/>";
//     }
//     function setTitle($par){
//         $this->title=$par;
//     }
//     function getTitle()
//     {
//         echo $this->title."<br/>";
//     }
// }
// $phyics=new Book();
// $math=new Book();
// $chemistry=new Book();
// //setting valus
// $phyics->setTitle("Physics for high school");
// $math->setTitle("advanced math for high school");
// $chemistry->setTitle("chemistry for advanced  learning chemicals ");
// //setting price values 
// $phyics->setPrice(5000);
// $math->setPrice(8000);
// $chemistry->setPrice(6000);
// //========================calling functions 
// echo "Title are given below ";
// echo "<br/>";
// echo "<pre>";
// echo $phyics->getTitle()."<br/>";
// echo $math->getTitle()."<br/>";
// echo $chemistry->getTitle();
// echo "</pre>";
// echo "<pre>";
// echo "<mark><b><strong>Price values are given below </strong></b></mark>";
// echo "<br/>";
// echo"<mark>The price for Physics: </mark>   ";echo  $phyics->getPrice();
// echo "<mark>The price for Mathematics:</mark>   ";echo  $math->getPrice();
// echo "<mark>The price for Chemistry:    </mark>";echo $chemistry->getPrice();
// echo "</pre>";
//========================================================php example 4
?>
<!-- HTML and PHP OOP Example 4  -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h3{
            color: red;
            text-align: center;
            font-size: 30px;
        }
        pre{
            color: green;
        }
    </style>
    <title>ajman khan </title>
</head>
<body>
    <?php  
    // class Book{
    //     var $price;
    //     var $title;
    //     function __construct($par1,$par2){
    // $this->title=$par1;
    // $this->price=$par2;
    
    //     }
    //     function setPrice($par){
    //         $this->price=$par;
    //     }
    //     function getPrice()
    //     {
    //         echo $this->price."<br/>";
    //     }
    //     function setTitle($par){
    //         $this->title=$par;
    //     }
    //     function getTitle()
    //     {
    //         echo $this->title."<br/>";
    //     }
    // }
    // class Novel extends Book{
    //     var $publisher;
    //     function __construct($par1,$par2,$par3)
    //     {
    //         $this->title=$par1;
    //         $this->price=$par2;
    //         $this->publisher=$par3;
    //     }

    //     function getPublisher(){
    //         return $this->title."   ".$this->price."    ".$this->publisher;
           
    //     }
    // }
    // $phyics=new Book("Physics for NET1 ",7000);
    // $math=new Book("Mathematics for NET1 ",9000);
    // $chemistry=new Book("Chemistry for NET1 ",8000);
    // $novel=new Novel("ajman",4500,"auther"); 
    // echo "<h3>Title are given below </>";
    // echo "<pre>";
    // echo $phyics->getTitle()."<br/>";
    // echo $math->getTitle()."<br/>";
    // echo $chemistry->getTitle();
    // echo "</pre>";
    // echo "<br/>";
    // echo "<h3><b>Price values are given below </b></>";
    // echo "<pre>";
    // echo"<mark>The price for Physics: </mark>   ";echo  $phyics->getPrice();
    // echo "<mark>The price for Mathematics:</mark>   ";echo  $math->getPrice();
    // echo "<mark>The price for Chemistry:    </mark>";echo $chemistry->getPrice();
    // echo "</pre>";
    // echo "<br/>";
    // echo "<h3><b>Publisher  values are given below </b></>";
    // echo "<pre>";
    // echo $novel->getTitle();
    // echo  $novel->getPrice();
    // echo $novel->getPublisher();
    // echo "</pre>";
    //==================================================================PHP Inheritance another examples 
    // class MyClass {
    //     private $car = "skoda";
    //     $driver = "SRK";
        
    //     function __construct($par) {
    //        // Statements here run every time
    //        // an instance of the class
    //        // is created.
    //     }
        
    //     function myPublicFunction() {
    //        return("I'm visible!");
    //     }
        
    //     private function myPrivateFunction() {
    //        return("I'm  not visible outside!");
    //     }
    //  }
    //  class Mypclass extends MyClass{
    //     // When MyClass class is inherited by another class using extends, 
    //     // myPublicFunction() will be visible, as will $driver. The extending 
    //     // class will not have any awareness of or access to myPrivateFunction 
    //     // and $car, because they are declared private
    //  }
    //==================================================another examples PHP OOP 
    
    ?>
   -- </body>
---</html>
    <?php
//     class MyClass {
//         protected $car = "skoda";
//         var $driver = "SRK";
     
//         function __construct($par) {
//            // Statements here run every time
//            // an instance of the class
//            // is created.
//         }
        
//         function myPublicFunction() {
//            return("I'm visible!");
//         }
        
//         protected function myPrivateFunction() {
//            return("I'm  visible in child class!");
//         }
//      }
//      class Myclass2 extends MyClass{
// myPrivateFunction();
//      }
// class Foo {
//     public static $my_static = 'foo';
    
//     public function staticValue() {
//        return self::$my_static;
//     }
//  }
  
//  print Foo::$my_static . "\n";
//  $foo = new Foo();
 
//  print $foo->staticValue() . "\n";
     ////////=============================================================
    //  $name ="<h1>ajman khan wazir</h1>";
    //  echo $name;
    ?>

 