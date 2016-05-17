<?php

    session_start();
	
    //Check if a message is set and takes care of special characters
    function message() {
        if (isset($_SESSION["message"])) {
            $output = "<div class=\"message\">";
            $output .= htmlentities($_SESSION["message"]);
            $output .= "</div>";
			
	    // clear message after use
	    $_SESSION["message"] = null;
			
	    return $output;
            }
	}

    //Returns a message that contains any errors found
    function errors() {
	if (isset($_SESSION["errors"])) {
            $errors = $_SESSION["errors"];
			
            // clear message after use
            $_SESSION["errors"] = null;
			
	return $errors;
	}
    }
	
?>



