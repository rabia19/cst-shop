<?php include('header.php') ?>



<?php 
	$db = mysqli_connect('localhost', 'root', '', 'products');
	
         $result2 = mysqli_query($db,"SELECT * FROM `product`");
         while($row = mysqli_fetch_assoc($result2)){
         		echo "<div class='product_wrapper'>
         			  <form method='post' action=''>
         			  <div class='image'><img src='images/products/".$row['id'].".jpg' /></div>
         			  <div class='name'>".$row['product_name']."</div>
         		   	  <div class='price'>$".$row['price']."</div>
         			  
         			  </form>
         		   	  </div>";
                 }
         mysqli_close($db);
         
?>



<?php include('footer.php') ?>