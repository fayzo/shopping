<?php

include 'db.php';
if ($_REQUEST['key']) {

if ($_REQUEST['key'] == 'delete') {
          $id= $db->real_escape_string($_REQUEST['id']);
          // FILES TO DELETE ON ITS DESTINATIONS
          $uploadDir = "uploads/";
          $query= $db->query("SELECT image FROM shopping_cart WHERE id= $id");
          $rows= $query->fetch_assoc();
          $files= $uploadDir.$rows['image'];
           if (!unlink($files)) {
             echo "<script>alert('file was not deleted')</script>";
             }else{ echo "<script>alert('file was deleted')</script>";}
           $db->query("DELETE FROM shopping_cart WHERE id=$id ");
    }

    if ($_REQUEST['key'] == 'color') {
			$id = $db->real_escape_string($_REQUEST['id']);
			$color = $db->real_escape_string($_REQUEST['color']);
         $insert= $db->query("UPDATE login SET color='$color' WHERE login_id='$id'");
         $sql= $db->query("SELECT login_id,color FROM login WHERE login_id = '$id' ");
         // echo ($db)? 'good':"ERROR: Could not able to execute $sql.".mysqli_error($db);
        	$data = $sql->fetch_array();
        	$jsonArrays = array(
        		'login_id' => $data['login_id'],
        		'color' => $data['color'],
        	);
           exit(json_encode($jsonArrays));
      }

	if ($_REQUEST['key'] == 'viewORedit') {
			$rowID = $db->real_escape_string($_REQUEST['rowID']);
			$sql = $db->query("SELECT id, name, price, image FROM shopping_cart WHERE id='$rowID'");
			$data = $sql->fetch_array();
			$jsonArrays = array(
				'id' => $data['id'],
				'name' => $data['name'],
				'price' => $data['price'],
				'image' => $data['image'],
			);

			exit(json_encode($jsonArrays));
     }

    if ($_REQUEST['key'] == "update") {
      if (!empty($_FILES['picture']['name'])) {
               $fileName= $_FILES['picture']['name'];
               $fileExt = explode('.', $fileName);
               $fileActualExt = strtolower(end($fileExt));
               $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
                	
              	// can upload same image using rand function
              	// $final_image = rand(100,1000).$img;
              	// check's valid format
               if (in_array($fileActualExt, $valid_extensions)) {					
         		   // $upload =strtolower($final_image);
                   //  $fileName = strtolower(rand(100,1000).$_FILES['image']['name']);
                  $fileName= $_FILES['picture']['name'];
                  $fileNames = (strlen($fileName) > 10)? 
                  strtolower(rand(100,1000).substr($fileName,0,4).".".$fileActualExt):
                  strtolower(rand(100,1000).$_FILES['picture']['name']);
         		   $fileTmpName = $_FILES['picture']['tmp_name'];
         		   $fileDestination = 'uploads/'. $fileNames;	
         	
         		  if(move_uploaded_file($fileTmpName,$fileDestination)) {
                    $results = $db->real_escape_string($_REQUEST['id']);
                    // FILES TO DELETE ON ITS DESTINATIONS
                    $uploadDir = "uploads/";
                    $queryz= $db->query("SELECT image FROM shopping_cart WHERE id=$results");
                    $rowz= $queryz->fetch_assoc();
                    $files= $uploadDir.$rowz['image'] ;
      
                     if (!unlink($files)) {
                       echo "<script>alert('file was not deleted')</script>";
                       }else{ echo "<script>alert('file deleted')</script>";}
      
                    $db->query("UPDATE shopping_cart SET image='$fileNames' WHERE id=$results");
                    //Update status
               }
            }
         }
      }

     $name =$db->real_escape_string($_REQUEST['name']);
     $price = $db->real_escape_string($_REQUEST['price']);

     if ($_REQUEST['key'] == 'updateRow') {
			$id = $db->real_escape_string($_REQUEST['id']);
         $db->query("UPDATE shopping_cart SET name='$name', price='$price' WHERE id='$id'");
            // echo "<script>window.Location='admin.php';</script>" ;
         }

    if ($_REQUEST['key'] == 'addNew') {
     if (!empty($_POST['name']) || !empty($_POST['price']) || !empty($_FILES['image']['name'])) {
         
         $fileName= $_FILES['image']['name'];
         $fileExt = explode('.', $fileName);
         $fileActualExt = strtolower(end($fileExt));
         $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
          	
          	// can upload same image using rand function
          	// $final_image = rand(100,1000).$img;
          	// check's valid format
        if (in_array($fileActualExt, $valid_extensions)) {					
   		     // $upload =strtolower($final_image);
               //  $fileName = strtolower(rand(100,1000).$_FILES['image']['name']);
             $fileName= $_FILES['image']['name'];
             $fileNames = (strlen($fileName) > 10)? 
             strtolower(rand(100,1000).substr($fileName,0,4).".".$fileActualExt):
             strtolower(rand(100,1000).$_FILES['image']['name']);
   		     $fileTmpName = $_FILES['image']['tmp_name'];
   		     $fileDestination = 'uploads/'. $fileNames;	
   		
   		    if(move_uploaded_file($fileTmpName,$fileDestination)) {
               $db->query("INSERT INTO shopping_cart (name, price, image) 
               VALUES ('{$name }','{$price}','{$fileNames}') ");
          }
       }
    }
  }
}
     $sql=$db->query("SELECT * FROM shopping_cart");
     $rowCount=$sql->num_rows;
     $increment=0;
     while ($row =$sql->fetch_assoc()) { 
        if ($rowCount++ > 1) {
             $increment++;
         ?>
         <tr>
         <?php $image ="<img width = '60px' height='60px' src='uploads/".$row['image']."'>"?>
            <td ><?php echo $increment;?></td>
            <td ><?php echo $row['id'];?></td>
            <td id="name<?php echo $row['id'];?>"><?php echo $row['name'];?></td>
            <td id="price<?php echo $row['id'];?>"><?php echo $row['price'];?></td>
            <td id="image<?php echo $row['id'];?>"><?php echo $image;?></td>
            <td id="image<?php echo $row['id'];?>"><?php echo $row['image'];?></td>
            <td>
              <button type="button" onclick="viewORedit_('edit',<?php echo $row['id'];?>);" class="btn btn-primary" ><span class="fa fa-edit"></span></button>
              <button type="button" onclick="viewORedit_('view',<?php echo $row['id'];?>);"class="btn btn-secondary"><span class="fa fa-book"></span></button>
              <button type="button" onclick="ajax_request('delete',<?php echo $row['id'];?>);" class="btn btn-danger" ><span class="fa fa-trash"></span></button>
              <button type="button" id ="<?php echo $row['id'];?>" class="btn btn-success update" ><span class="fa fa-image"></span></button>
            </td>
        </tr>
    <?php 
       }
    } 
$sql->close();
$db->close();
?>