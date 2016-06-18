<?php

//Directs user to a given URL location
function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit;
}

//Escapes all special characters including: 
//NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.
function mysql_prep($string) {
    global $conn;

    $escaped_string = mysqli_real_escape_string($conn, $string);
    return $escaped_string;
}

//Confirm the query was clean
function confirm_query($result_set) {
    if (!$result_set) {
        die("Database query failed.");
    }
}

//Tells the user about errors in the form
function form_errors($errors=array()) {
    $output = "";
    if (!empty($errors)) {
        $output .= "<div class=\"error\">";
        $output .= "Please fix the following errors:";
        $output .= "<ul>";
        //Loops through all of the errors to be printed out
        foreach ($errors as $key => $error) {
            $output .= "<li>";
            $output .= htmlentities($error);
            $output .= "</li>";
        }

        $output .= "</ul>";
        $output .= "</div>";
    }
    return $output;
}

//Encrypts the password using th Blowfish Algorithm
function password_encrypt($password) {
    $hash_format = "$2y$10$";                   // Tells PHP to use Blowfish with a "cost" of 10
    $salt_length = 22;                          // Blowfish salts should be 22-characters or more
    $salt = generate_salt($salt_length);
    $format_and_salt = $hash_format . $salt;
    $hash = crypt($password, $format_and_salt);
    return $hash;
    }

function generate_salt($length) {
    // Not 100% unique, not 100% random, but good enough for a salt
    // MD5 returns 32 characters
    $unique_random_string = md5(uniqid(mt_rand(), true));

    // Valid characters for a salt are [a-zA-Z0-9./]
    $base64_string = base64_encode($unique_random_string);

    // But not '+' which is valid in base64 encoding
    $modified_base64_string = str_replace('+', '.', $base64_string);

    // Truncate string to the correct length
    $salt = substr($modified_base64_string, 0, $length);

    return $salt;
    }

function password_check($password, $hashed_password) {
    //existing hash contains format and salt at start
    $hash = crypt($password, $hashed_password);
  
    if ($hash === $hashed_password || $password === $hashed_password) {
        return true;
    } else {
        return false;
    }
}

function attempt_login($email, $password) {
    $member = find_user_by_email($email);
    if ($member) {
        // found user, now check password
        if (password_check($password, $member["password"])) {
            // password matches
            return $member;
        } else {
            // password does not match
            return false;
        }
    } else {
        // admin not found3
        return false;
    }
}

// Return the user info from a given username
// If the user does not exist we return null
function find_user_by_email($email) {
    global $conn;

    $safe_email = mysqli_real_escape_string($conn, $email);

    $query  = "SELECT * ";
    $query .= "FROM member ";
    $query .= "WHERE email = '{$safe_email}' ";
    $query .= "LIMIT 1 ";
    $member_set = mysqli_query($conn, $query);
    confirm_query($member_set);
   

    if(mysqli_num_rows($member_set) >= 1) {
        $member = mysqli_fetch_assoc($member_set);
        return $member;
    } else {
        return null;
       
    }
}

// If the session variable is set then the user logged in
function logged_in() {
    return isset($_SESSION['id']);
}

// See if the user is logged in
function confirm_logged_in() {
    if (!logged_in()) {
        $_SESSION['message'] = "You must be logged in to see that page.";
        redirect_to("../../php/login.php");
    }
}

function print_message($message){
    ?>
     <div class="alert alert-info" role="alert">
        <?php echo $message ?>
      </div>
     <?php   
}

// Get the number of rows that have a given piece of data
function num_items($table, $column, $data){
    global $conn;

    $query = "Select {$column} FROM {$table} WHERE email = '$data'";
    $result = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    return $numrows;
}



