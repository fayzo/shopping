<?php
include 'db.php';
if ($_REQUEST['key']) {

if ($_REQUEST['key'] == 'image') {
			$rowID = $db->real_escape_string($_REQUEST['id']);
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
}
?>