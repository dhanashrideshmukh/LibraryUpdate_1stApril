<?php


//include 'Library/Users/Member.php';
include '/Applications/XAMPP/xamppfiles/htdocs/Exercise20_A/Library/Users/Member.php';
include '/Applications/XAMPP/xamppfiles/htdocs/Exercise20_A/TestFIles/array.php';
//include 'Library/Traits/Traits.php';

//include Library\Users\Librarian . php;
//include Library\Users\Library_Manager . php;
use Library\Users\Guest;
use Library\Users\Member;
//use Library\Traits\Traits;

$Member = new Member("3333", "C00k5", "Mary", "Magoo");
//      Setting a property/object 

$Member->BookList = $array;


//      Echoing the data from functions

echo $Member->Full_Name()."\n"; //get_full_name

echo $Member->Forgot_user_id()."\n\n"; //get_user_id

echo $Member->Forgot_password()."\n\n";

echo $Member->asReturnable()."\n\n";

$due_date = "21-04-2019";
$days = 5;
echo $Member->Update_Due_Date($due_date, $days);










