<?php
	include_once('../includes/connect_database.php'); 
	include_once('../includes/variables.php');
	

			$sql_query = "SELECT * 
					FROM tbl_category 
					ORDER BY Category_name ASC ";
			
			$result = $connect->query($sql_query) or die ("Error :".mysql_error());
	 
			$categories = array();
			while($category = $result->fetch_assoc()) {
				$categories[] = array('Category'=>$category);
			}
			
			$output = json_encode(array('data' => $categories));

 
	echo $output;

	include_once('../includes/close_database.php'); 
?>