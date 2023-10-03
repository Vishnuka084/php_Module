<?php>

/*
   ---------- if  -------------
    $age=30;
    if($age>=18){
    echo "You are an adult !";
    }else{
    echo "You are not eligible ";
    }


   ----------  else if ----------

    $marks=80;

    if($marks>=90){
        echo "A";
    }elseif($marks>=80){
        echo "B"
    }elseif($marks>=70){
        echo "C";
    }else{
        echo "F";
    }

    ----------- switch ----------

    $day= "Monday";
    switch(day){
        case "Monday":
            echo "Monday";break;
        case "Sunday":
            echo "Sunday";break;
        default:
            echo "Wrong input";
    }

    ----------- for loop --------

    for($i=1; $i<=5; $i++){
        echo $i . " ";
    }


    ----------while -loop ---------

    $i=1;
    while($i<=5){
        echo $i . " ";
        $i++;
    }

    -------- for each loop ---------


    $names = array("Nimal","Kamal","Piyal","Jagath");

    foreach($names as $name){
        echo $name . " ";
    }
*/

    $names = array("name" => "Kamal","age" => 45);

    foreach($data as $key => $value){
        echo $key . ":" . $value . "<br>";
    }

?>