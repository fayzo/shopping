<?php
include 'db.php';
if (isset($_REQUEST['key'])) {
    # code...
    if ($_REQUEST['key'] == 'lang') {
        # code...
	   $id = $db->real_escape_string($_REQUEST['id']);
	   $lang = $db->real_escape_string($_REQUEST['lang']);
       $db->query("UPDATE login SET language ='$lang' WHERE login_id= '$id' ");
       $sql= $db->query("SELECT login_id, language FROM login WHERE login_id = '$id'");
       $data = $sql->fetch_array(); 
       $language = array(
           'language' => $data['language'],
        );
        // echo ($db)? 'good':"ERROR: Could not able to execute $sql.".mysqli_error($db);
       exit(json_encode($language));
     }
}
?>