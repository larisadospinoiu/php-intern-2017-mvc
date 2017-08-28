<?php
class Model_AddPost extends Model
{
    function insert_post()
    {
        
    	if(isset($_POST['submit'])){

			    $id = '';
				$name = $_POST['name'];
				$details = $_POST['details'];
				$price = $_POST['price'];
				$job =$_POST['job'];
				if(isset($_FILES['imagine'])){
				  $errors= array();
				  $file_name = $_FILES['imagine']['name'];
				  $file_size =$_FILES['imagine']['size'];
				  $file_tmp =$_FILES['imagine']['tmp_name'];
				  $file_type=$_FILES['imagine']['type'];
				  $file_ext=strtolower(end(explode('.',$_FILES['imagine']['name'])));
				  
				  $expensions= array("jpg");
				  
				  if(in_array($file_ext,$expensions)=== false){
					 $errors[]="extension not allowed, please choose a JPEG file.";
				  }
				  
				  if($file_size > 2097152){
					 $errors[]='File size must be excately 2 MB';
				  }
				  
				  if(empty($errors)==true){
					 move_uploaded_file($file_tmp,"assets/images/".$file_name);
					 echo "Success";
				  }else{
					 print_r($errors);
				  }
			   }
			   
	
	$sth =$this->db->prepare( "INSERT INTO products (id, name, details, price, job, imagine)
	VALUES ('$id','$name','$details','$price','$job','$file_name')");
	
	$sth->execute();
		}
	}
}
?>
