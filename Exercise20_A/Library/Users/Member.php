<?php

namespace Library\Users;

include 'Guest.php';
include '/Applications/XAMPP/xamppfiles/htdocs/Exercise20_A/Library/Traits/Traits.php';
include '/Applications/XAMPP/xamppfiles/htdocs/Exercise20_A/Library/Interfaces/Returnable.php';

//use Library\Traits;


class Member extends Guest implements \Library\Interfaces\Returnable{

//      Creating properties within the class.
    protected $user_id;
    protected $password;

//      Creating methods  
    public function __construct($user_id, $password, $first_name, $last_name) {
        parent::__construct($first_name, $last_name); // constructing parent
        $this->user_id = $user_id;
        $this->password = $password;
    }

//        function Forgot_user_id() {
//            return "Hello " . $this->Full_Name() . "Your User ID is: " . $this->user_id;
//        }
//
//        function Forgot_password() {
//            return "Hello " . $this->Full_Name() . "Your Password is: " . $this->password;
//        }
    public function Forgot_user_id() {
        return "Hello " . "$this->first_name" . " " . "$this->last_name" . "\n" . "Your User ID is: " . "$this->user_id" . "\n";
    }

    public function Forgot_password() {
        return "Hello " . "$this->first_name" . " " . "$this->last_name" . "\n" . "Your Password is: " . "$this->password";
    }

    public function view($list) {
        if (parent::view($list)) {
            return true;
        } else if ($list === "Book_loan") {
            echo $list;
            return true;
        }
        echo "Access denied";
        return false;
    }
// using trait dateable here
    use \Library\Traits\dateable;

        public function asReturnable() {
            return $this->user_id;
        }
}
