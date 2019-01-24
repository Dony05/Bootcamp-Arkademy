<?php
	// Membuat variabel
  


    function is_username_valid($name){

        if(strlen($name) == 8){
            return true;
        } else {
            return false;
        }
            if(!preg_match("/^[a-z_]*$/",$name)){
                return false;
    } else {
        return true;
    }
    }

    function is_password_valid(){
        if(strlen($password) == 8){
            return true;
        } else {
            return false;
        }
        if (!preg_match("/^[a-zA-Z0-9!@#$%^&*()]*$/",$password)){
            return true;    
        } else {
            return false;
        }
    }
    

?>
