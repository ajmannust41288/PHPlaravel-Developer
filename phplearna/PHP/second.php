<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    // $weekday = 5;
    // switch ($weekday) {
    //     case 1:
    //         echo "Today is Monday";
    //         break;
    //     case 2:
    //         echo "Today is tuesday";
    //         break;
    //     case 3:
    //         echo "Today is wednesday";
    //         break;
    //     case 4:
    //         echo "Today is Thursday";
    //         break;
    //     case 5:
    //         echo "Today is Friday";
    //         break;
    //     case 6:
    //         echo "Today is Saturday";
    //         break;
    //     case 7:
    //         echo "Today is Sunday";
    //         break;
    //     default:
    //         echo "Enter the valid Week day";
    // }
// example 02=========================
// $age=18;
// switch(true){
//     case($age>=15 && $age<=20):
//         echo "You are elligible ";
//         break;

// case($age>=21 && $age<=30):
//     echo "You are not elligible ";
//     break;
//     default:
//     echo "enter valid age";
// }
//===================check ternary conditions
// $x=18;
// ($x>20)?$z="true":$z="false";
// $z="The value is ".($x>20?"Greater ":"Smaller");
// echo $z;
//-------------------------------
// $message="hello";
// $message.="this is my ";
// $message.="World";
// echo $message;
//========================
if(isset($_POST['submit'])){
    echo $_POST['name'];
}

    ?>
</body>

</html>