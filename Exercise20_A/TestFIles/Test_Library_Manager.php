<?php


include '/Applications/XAMPP/xamppfiles/htdocs/Exercise20_A/Library/Users/Library_Manager.php';
include '/Applications/XAMPP/xamppfiles/htdocs/Exercise20_A/TestFIles/array.php';

use Library\Users\Guest;
use Library\Users\Member;
use Library\Users\Librarian;
use Library\Users\Library_Manager;


$Library_Manager = new Library_Manager("999999", "(Manager)", "1234", "B00k5", "Lydia", "McDonald");
//      Setting a property/object 

$Library_Manager->BookList = $array;
//      Echoing the data from functions

echo $Library_Manager->Full_Name() . "\n";

echo $Library_Manager->Forgot_user_id() . "\n";

echo $Library_Manager->Position() . "\n";

$item = "ABC";
$Library_Manager->DeleteData($array, $item);

$Library_Manager->view($array);

$Library_Manager->viewMD(new LogInDetails("A", "B"));










