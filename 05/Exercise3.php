<?php



$person = new stdClass();
$person->name='Olivers';
$person->surname='Lielgaums';
$person->age=17;

function ageCheck ($person){
    if ($person->age>17){
        return true;echo 'This person has not yet reached the age 18';
    }else{
        return false;
    }
}

if(ageCheck($person)){
    echo "This person is over 18";
}else{
    echo "This person is not over 18";
}