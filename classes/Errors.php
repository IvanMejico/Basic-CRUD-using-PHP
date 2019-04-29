<?php
class Errors {
    public $errorArray;

    //CONSTANT ERROR MESSAGES
    public static $IDERROR = "ID required!";
    public static $FIRSTNAMEERROR = "Firstname required!";
    public static $MIDDLENAMEERROR = "Middlename required!";
    public static $LASTNAMEERROR = "Lastname required!";

    public function __construct() {
        $this->errorArray = array();
    }

    //RETURN ERROR MESSAGES
    function getError($error_string) {
        if (in_array($error_string, $this->errorArray)) {            
            return $error_string;
        } else {
            return "";
        }
    }
}
?>