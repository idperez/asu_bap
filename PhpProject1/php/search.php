<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php require_once($root."/bap/includes/connection.php"); ?>
<?php require_once($root."/bap/includes/functions/sessions.php"); ?>
<?php require_once($root."/bap/includes/functions/functions.php"); ?>
<?php require_once($root."/bap/includes/functions/validations.php"); ?>

<?php

// Output HTML formats
$html = '<tr>';
$html .= '<td class="small">firstname</td>';
$html .= '<td class="small">lastname</td>';
$html .= '<td class="small">email</td>';
$html .= '<td class="small">major</td>';
$html .= '<td class="small">level</td>';
$html .= '<td class="small">linkedin</td>';
$html .= '<td class="small">profile</td>';
$html .= '<td class="small">edit</td>';
$html .= '</tr>';

// Get the Search
$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
$search_string = $conn->real_escape_string($search_string);

// Check if length is more than 1 character
if (strlen($search_string) >= 1 && $search_string !== ' ') {
    //Insert Time Stamp

    $search_by = $_POST['search_by'];
    
    $query = 'SELECT * FROM member WHERE '.$search_by.' LIKE "%'.$search_string.'%"';

    // Do the search
    $result = mysqli_query($conn, $query);
    //$result = $test_db->query($query);
    $results = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
   
    // Check for results
    if (isset($results)) {
        for($i = 0; $i < $count; $i++) {
            // Output strings and highlight the matches
             $firstname = preg_replace("/".$search_string."/i", "<b>".$search_string."</b>", $results['firstname']);
             $lastname = $results['lastname'];
             $email = $results['email'];
             $major = $results['major1'];
             $level = $results['level'];
             $linkedin = $results['linkedin'];
     
             $id = $results['id'];
             
            // Replace the items into above HTML
            $o = str_replace('firstname', $firstname, $html);
            $o = str_replace('lastname', $lastname, $o);
            $o = str_replace('email', $email, $o);
            $o = str_replace('major', $major, $o);
            $o = str_replace('level', $level, $o);
            $o = str_replace('linkedin', '<a target="_blank" href='.$linkedin.'>
                    <img alt="follow me on instagram" src="../../assets/images/linkedin.png" border=0>
                        </a>', $o);
            $o = str_replace('profile', '<a type="button" class="btn btn-info btn-sm" href="profile.php">View</a>', $o);
            $o = str_replace('edit', '<a type="button" class="btn btn-primary" href="edit-member.php">Edit</a>', $o);
            // Output it
            echo($o);
        }
    } else {
        // Replace for no results
        $o = str_replace('firstname', '<span class="label label-danger">No Matches</span>', $html);
        $o = str_replace('lastname', '', $o);
        $o = str_replace('email', '', $o);
        $o = str_replace('major', '', $o);
        $o = str_replace('level', '', $o);
        $o = str_replace('linkedin', '', $o);
        $o = str_replace('profile', '', $o);
        $o = str_replace('edit', '', $o);
        
        // Output
        echo($o);
    }
}
