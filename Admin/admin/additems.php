<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");//redirect to login page to secure the welcome page without login access.
}

?>

<?php
include("db_conection.php");
if(isset($_POST['item_save']))
{
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$gen_name = $_POST['gen_name'];
$supplier = $_POST['supplier'];
$o_price = $_POST['o_price'];
$product_quantity = $_POST['product_quantity'];
$expiry_date = $_POST['expiry_date'];
$product_details = $_POST['product_details'];

 
 $check_item="select * from tbl_product WHERE product_name='$product_name'";
    $run_query=mysqli_query($dbcon,$check_item);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Item is already exist, Please try another one!')</script>";
 echo"<script>window.open('index.php','_self')</script>";
exit();
    }
 
$imgFile = $_FILES['product_image']['name'];
$tmp_dir = $_FILES['product_image']['tmp_name'];
$imgSize = $_FILES['product_image']['size'];


$upload_dir = 'item_images/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
$itempic = rand(1000,1000000).".".$imgExt;


				
	
			if(in_array($imgExt, $valid_extensions)){			
		
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
					$saveitem="insert into tbl_product (product_name,product_price,product_image,gen_name,supplier,o_price,product_quantity,expiry_date,product_details,product_date) VALUE ('$product_name','$product_price','$itempic','$gen_name','$supplier','$o_price','$product_quantity','$expiry_date','$product_details',CURDATE())";
					mysqli_query($dbcon,$saveitem);
					 echo "<script>alert('Data successfully saved!')</script>";				
					 echo "<script>window.open('items.php','_self')</script>";
				}
				else{
					
					 echo "<script>alert('Sorry, your file is too large.')</script>";				
					 echo "<script>window.open('items.php','_self')</script>";
				}
			}
			else{
				
				 echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";				
					 echo "<script>window.open('items.php','_self')</script>";
				
			}
		
	
		

}

?>









