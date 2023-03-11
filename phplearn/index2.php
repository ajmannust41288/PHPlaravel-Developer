 <?php 
//------------------------------------------------------
class Car{
    public $engine;
    public $model;
    public $batch;
    public $RegNo;
    public $hp;
    public $vol;
    public function __construct($engine,$model,$batch,$RegNo,$hp,$vol)
    {
$this->engine=$engine;
$this->model=$model;
$this->batch=$batch;
$this->RegNo=$RegNo;
$this->hp=$hp;
$this->vol=$vol;
    }
    public function message()
    {
        return "My car is : ".$this->engine."<br>"."Model is :".$this->model.
        "<br>"."Batch of car  is :"
        .$this->batch."<br>"."Registration of car is  :".$this->RegNo."";
    }
    public function engine(){
        return "My car engine HP poer is :".$this->hp."<br>"
        ."volume of car is ".$this->vol."";
    }
    public function suma($x,$y){
        $this->z=$x+$y;
        return "the sum of two number is :".$this->z;
    }
    public function floatnum(float $a,float $b):float{
        return $a+$b;
    }
    public function customer($fname,$mname,$lname,$age,$city){
        echo "Below is the customers informations ";
        echo "<br>";
        $this->fname=$fname;
        $this->mname=$mname;
        $this->lname=$lname;
        $this->age=$age;
        $this->city=$city;
        return "First name:".$this->fname."<br>"."Middle name:".$this->mname.
        "<br>"."last name:".$this->lname."<br>"
        ."Age is :".$this->age."<br>"."city is :".$this->city."";
    }
}
$mycar=new Car("CC45","BMW","45G",7864533,456,"789V");
echo $mycar->message();
echo "<br>";
echo $mycar->engine();
echo '<br>';
echo $mycar->suma(567,786);
echo '<br>';
echo "<br>";
echo $mycar->customer("ajman","ullah ","khan",24,"islamabad");
echo '<br>';
echo "<br>";
$mycar2=new Car("CC55","QMW","75M",5646477433,567,"897V");
echo $mycar2->message();
echo "<br>";
echo $mycar2->engine();
echo "<br>";
echo $mycar2->suma(890,806);
echo '<br>';
echo "<br>";
echo $mycar2->customer("Kalim","ullah ","khan",25,"Bannu");
    echo "<br>";
    echo "<br>";
    echo "<br>";
    require "index.view.php";
    ?>