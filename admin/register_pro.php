<html>
<head>
<title>Inserting product</title>


</head>
<body bgcolor="skyblue">
<form action="" method="post" enctype="multipart/form-data">

  <fieldset style="width:400px; height:auto; background-color:white;align:center; color:blue;
  margin-left:200px; margin-top:50px; font-family:COMIC SANS MS;"><legend>Injiza igicuruzwa Gishya</legend>
  <table style="font-family:COMIC SANS MS;color:blue;">
  <tr><td><b>Igicuruzwa</b></td><td><input type="text" name="product_name" autocomplete="off"  required></td></tr>

  </tr>
  <tr><td> <b>Quantity</b> </td><td> <input type="number" name="qty" step="any" autocomplete="off" required></td></tr>
  <tr><td> <b>Igiciro</b> </td><td> <input type="number" name="sell_price" step="any" autocomplete="off" required></td></tr>
   <tr><td> <b>Ikiranguzo</b>  </td><td> <input type="number" name="org_price" step="any" autocomplete="off"required></td></tr>
   <tr><td> <b>Minimum QTY</b>  </td><td> <input type="number" name="min" step="any" autocomplete="off"required></td></tr>
   
  <tr align="center"><td colspan="3"> <input type="submit" name="save"  value="INJIZA"  style="width:100px;
	 height:35px; border:0;	 border-radius:5px;	 -webkit-border-radius:5px;	-o-border-radius:5px;	-moz-border-radius:5px;
	background-color:blue;		font-weight:bolder; color:white;" ></td></tr>
  </table>
   
  </fieldset>
</form>

</body>
</html>
<?php
	include"include/connnect.php";
if(isset($_POST['save'])){

	$pro_name=$_POST['product_name'];
	//$pro_desc=$_POST['product_desc'];
	$date=date("Y-m-d");
	$sell_price=$_POST['sell_price'];
	$org_price=$_POST['org_price'];
	$quantity=$_POST['qty'];
	$min=$_POST['min'];
	//$inyungu=($sell_price-$org_price)*$quantity;
	
	
	
	//$azavamo=	$quantity*$sell_price;
	//$ayarangujwe=$quantity*$org_price;
	
	
	$insert_pro="insert into new_stock(prod_name,selling_price,original_price,quantiy,min_qty) values('$pro_name','$sell_price','$org_price','$quantity','$min')";
	$run_pro=mysqli_query($con,$insert_pro);
	//$insert_big_sto="insert into new_article_bigstock(prod_name) values('$pro_name')";
	//$run_big_sto=mysqli_query($con,$insert_big_sto);
	if($run_pro){
		echo"<script>alert('Igicuruzwa Kinjijwe neza')</script>";
		echo"<script>window.open('index.php?view_sto','_self')</script>";
	}
	else{
		echo"<script>alert('Data  not Are succsessfully inserted')</script>";
		echo"<script>window.open('index.php?register_product','_self')</script>";
	}

}

?>