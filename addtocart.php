
<?php
$link = mysqli_connect('localhost','root','toor','db_nisc');
if(isset($_POST['order']))
{
$user_id = $_POST['user_id'];
$order_name = $_POST['order_name'];
$order_price = $_POST['order_price'];
$order_quantity = $_POST['order_quantity'];
$order_status='Pending';




 
$save_order_details="insert into wishlist (user_id,order_name,order_price,order_quantity,order_status,order_date) VALUE ('$user_id','$order_name','$order_price','$order_quantity','$order_status',CURDATE())";
mysqli_query($link,$save_order_details);
echo "<script>alert('Item successfully added to cart!')</script>";				
echo "<script>window.open('cartprocess.php?id=1','_self')</script>";


				
	
			
		
	
		

}

?>
